<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Content_model');

        is_logged_in();

    }

	public function index()
	{
		$data = array('title'=> 'Listing');

		$this->load->view('header', $data);
		$this->load->view('content/lists');
	}

	public function lists()
	{
		$data['title'] = 'Content List';

		$res = $this->Content_model->get_list();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('content/lists', $data);
	}

	public function add($id='')
	{
		$data['title'] = 'Add Content';

		$selected = '';
		$selected2 = '';
		if($id!=''){
			$result = $this->Content_model->get_data($id);
			$data['result'] = $result;
			$selected = $result->MenuID;
			$selected2 = $result->TemplateID;
		}

		$main_menu = $this->Content_model->get_menu_structure($selected);
		$data['menu_dropdownlist'] = $main_menu;	

		$template = $this->Content_model->get_template_dropdownlist($selected2);
		$data['template_dropdownlist'] = $template;

		$this->form_validation->set_rules('MenuID', 'Menu', 'required');
		$this->form_validation->set_rules('TemplateID', 'Template', 'required');
		$this->form_validation->set_rules('ContentNameTH', 'Content Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('ContentNameEN', 'Content Name (EN)', 'required|min_length[1]');	
		$this->form_validation->set_rules('PageTitleTH', 'Page Title (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('PageTitleEN', 'Page Title (EN)', 'required|min_length[1]');
		$this->form_validation->set_rules('PageHeadlineTH', 'Page Headline (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('PageHeadlineEN', 'Page eadline (EN)', 'required|min_length[1]');
		$this->form_validation->set_rules('ContentTH', 'Content (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('ContentEN', 'Content (EN)', 'required|min_length[1]');
		$this->form_validation->set_rules('MetaKeywordTH', 'Meta Keyword (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('MetaKeywordEN', 'Meta Keyword (EN)', 'required|min_length[1]');	
		$this->form_validation->set_rules('MetaDescriptionTH', 'Meta Description (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('MetaDescriptionEN', 'Meta Description (EN)', 'required|min_length[1]');										

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('content/add', $data);

		}
		else
		{

			$data_insert = array(
				'MenuID' => $this->input->post('MenuID'),
				'TemplateID' => $this->input->post('TemplateID'),
				'ProductID' => $this->input->post('ProductID'),
				'ContentNameTH' => $this->input->post('ContentNameTH'),
				'ContentNameEN' => $this->input->post('ContentNameEN'),
				'PageTitleTH' => $this->input->post('PageTitleTH'),
				'PageTitleEN' => $this->input->post('PageTitleEN'),
				'PageHeadlineTH' => $this->input->post('PageHeadlineTH'),
				'PageHeadlineEN' => $this->input->post('PageHeadlineEN'),
				'ContentTH' => $this->input->post('ContentTH'),
				'ContentEN' => $this->input->post('ContentEN'),
				'MetaKeywordTH' => $this->input->post('MetaKeywordTH'),
				'MetaKeywordEN' => $this->input->post('MetaKeywordEN'),
				'MetaDescriptionTH' => $this->input->post('MetaDescriptionTH'),
				'MetaDescriptionEN' => $this->input->post('MetaDescriptionEN'),
				'ShowLeftMenu' => $this->input->post('ShowLeftMenu'),
				'Status' => $this->input->post('Status')
			);
			if($this->input->post('ID') == '')
			{
				$main_menu = $this->Content_model->insert_data($data_insert);
			}
			else
			{
				$main_menu = $this->Content_model->update_data($data_insert,$this->input->post('ID'));
			}

			redirect(site_url('content/lists'), 'refresh');
		}

	}	

	public function delete($id='')
	{
		$this->Content_model->delete_data($id);
		redirect(site_url('content/lists'), 'refresh');

	}

}
