<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Menu_model');

    }

	public function index()
	{
		$data = array('title'=> 'Listing');

		$this->load->view('header', $data);
		$this->load->view('menu/lists');
	}

	public function lists()
	{
		$data['title'] = 'Menu List';

		$res = $this->Menu_model->get_menu();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('menu/lists', $data);
	}

	public function add()
	{
		$data['title'] = 'Add Menu';

		$main_menu = $this->Menu_model->get_menu_structure(0);
		$data['menu_dropdownlist'] = $main_menu;	

		$this->form_validation->set_rules('Parent', 'Parent Menu', 'required');
		$this->form_validation->set_rules('MenuNameTH', 'Menu Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('MenuNameEN', 'Menu Name (EN)', 'required|min_length[1]');
		$this->form_validation->set_rules('Position', 'Position', 'required|numeric');
		

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('menu/add', $data);

		}
		else
		{

			$data['title'] = 'Menu List';
			$res = $this->Menu_model->get_menu();
			$data['result'] = $res;

			$menu_data = $this->Menu_model->get_level($this->input->post('Parent'));
			$next_level = $menu_data->Level + 1;
			$data_insert = array(
				'Parent' => $this->input->post('Parent'),
				'Level' => $next_level,
				'MenuNameEN' => $this->input->post('MenuNameEN'),
				'MenuNameTH' => $this->input->post('MenuNameTH'),
				'Position' => $this->input->post('Position'),
				'Status' => $this->input->post('Status')
			);
			$main_menu = $this->Menu_model->insert_menu($data_insert);

			redirect(site_url('menu/lists'), 'refresh');
		}

	}	

	public function delete($id='')
	{
		$this->Menu_model->delete_menu($id);
		redirect(site_url('menu/lists'), 'refresh');

	}

}
