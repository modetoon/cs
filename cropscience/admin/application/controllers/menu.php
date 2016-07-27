<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

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

		$this->form_validation->set_rules('menuname_en', 'Menu Name (TH)', 'required');
		$this->form_validation->set_rules('menuname_th', 'Menu Name (EN)', 'required');

		if ($this->form_validation->run() === FALSE)
		{

			$res = $this->Menu_model->get_menu_parent(0);
			$data['menu_parent'] = $res;

			$this->load->view('header', $data);
			$this->load->view('menu/add', $data);

		}
		else
		{
			$data['title'] = 'Menu List';
			$res = $this->Menu_model->get_menu();
			$data['result'] = $res;

			$this->load->view('header', $data);
			$this->load->view('menu/lists', $data);
		}

	}	

}
