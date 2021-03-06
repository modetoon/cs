<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Product_model');

		is_logged_in();
    }

	public function index()
	{
		$data = array('title'=> 'Product List');

		$this->load->view('header', $data);
		$this->load->view('product/lists');
	}

	public function lists()
	{
		$data['title'] = 'Product List';

		$res = $this->Product_model->get_category();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('product/lists', $data);
	}

	public function add($id='')
	{
		$data['title'] = 'Add Product';

		$selected = '';
		if($id!=''){
			$result = $this->Product_model->get_data($id);
			$data['result'] = $result;
			$selected = $result->CategoryID;
		}
		$main_menu = $this->Product_model->get_menu_structure($selected);
		$data['menu_dropdownlist'] = $main_menu;	

		//$this->form_validation->set_rules('Parent', 'Category', 'required');
		$this->form_validation->set_rules('TradeName', 'Trade Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('CommonName', 'Common Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('Formula', 'Formula', 'required|min_length[1]');
		$this->form_validation->set_rules('Detail', 'Detail', 'required|min_length[1]');
		$this->form_validation->set_rules('Contain', 'Contain', 'required|min_length[1]');
		$this->form_validation->set_rules('Suggestion', 'Suggestion', 'required|min_length[1]');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('product/add', $data);

		}
		else
		{
			
			/* ---------------- Upload Image ------------------- */
			$config['upload_path'] = 'upload/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '100';

			$this->load->library('upload', $config);
			
			/* ---------------- Upload Image ------------------- */
			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('upload_error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$Image = $data['upload_data']['file_name'];
			}
			
			/* ---------------- Upload Brand Image ------------------- */
			if ( ! $this->upload->do_upload('brandimage'))
			{
				$error = array('upload_error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data2' => $this->upload->data());
				$BrandImage = $data['upload_data2']['file_name'];
			}

			echo $Image.'-'.$BrandImage;die;

			if((isset($Image)) && ($Image != '')){
				$data_insert = array(
					//'CategoryID' => $this->input->post('Parent'),
					'TradeName' => $this->input->post('TradeName'),
					'CommonName' => $this->input->post('CommonName'),
					'Formula' => $this->input->post('Formula'),
					'Detail' => $this->input->post('Detail'),
					'Contain' => $this->input->post('Contain'),
					'Suggestion' => $this->input->post('Suggestion'),
					'Image' => $Image,
					'BrandImage' => $BrandImage,
					'Status' => $this->input->post('Status')
				);
			}else{
				$data_insert = array(
					'CategoryID' => $this->input->post('Parent'),
					'TradeName' => $this->input->post('TradeName'),
					'CommonName' => $this->input->post('CommonName'),
					'Formula' => $this->input->post('Formula'),
					'Detail' => $this->input->post('Detail'),
					'Contain' => $this->input->post('Contain'),
					'Suggestion' => $this->input->post('Suggestion'),
					'Status' => $this->input->post('Status')
				);
			}

			if($this->input->post('ID') == '')
			{
				$main_menu = $this->Product_model->insert_data($data_insert);
			}
			else
			{
				$main_menu = $this->Product_model->update_data($data_insert,$this->input->post('ID'));
			}
			redirect(site_url('product/lists'), 'refresh');
		}

	}	

	public function delete($id='')
	{
		$this->Product_model->delete($id);
		redirect(site_url('product/lists'), 'refresh');

	}

}
