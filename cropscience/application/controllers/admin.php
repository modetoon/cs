<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		//$this->load->model('Admin_model');

		is_logged_in();

    }

	public function index()
	{
		$this->load->helper('url');
		$data = array('title'=> 'Home');
		$this->load->view('header', $data);
		$this->load->view('dashboard');
	}

	public function logoff()
	{
		   $data = array(
							   'user_id'  => '',
							   'user_name'  => '',
							   'user_fullname'  => '',
							   'email'     => '',
							   'logged_in' => FALSE
						   );

		$this->session->unset_userdata($data);
		redirect(site_url('login'));
	}

	public function menu_lists(){
		$this->load->model('Menu_model');
		$data['title'] = 'Menu List';

		$res = $this->Menu_model->get_menu();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('admin/menu/lists', $data);
	}
	

	// ---------------------- Menu Controller -------------------------- //
	public function menu_add($id=''){
		$this->load->model('Menu_model');
		$data['title'] = 'Add Menu';

		$selected = '';
		if($id !=''){
			$result = $this->Menu_model->get_data($id);
			$data['result'] = $result;
			$selected = $result->Parent;
		}
		$main_menu = $this->Menu_model->get_menu_structure($selected);
		$data['menu_dropdownlist'] = $main_menu;	

		$this->form_validation->set_rules('Parent', 'Menu Parent', 'required');
		$this->form_validation->set_rules('MenuNameTH', 'Menu Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('MenuNameEN', 'Menu Name (EN)', 'required|min_length[1]');
		$this->form_validation->set_rules('Position', 'Position', 'required|numeric');	

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/menu/add', $data);

		}
		else
		{

			$_data = $this->Menu_model->get_data($this->input->post('Parent'));
			$next_level = (count($_data) > 0) ? $_data->Level + 1: 1;
			$data_insert = array(
				'Parent' => $this->input->post('Parent'),
				'Level' => $next_level,
				'MenuNameEN' => $this->input->post('MenuNameEN'),
				'MenuNameTH' => $this->input->post('MenuNameTH'),
				'Position' => $this->input->post('Position'),
				'Status' => $this->input->post('Status')
			);
			if($this->input->post('ID') == '')
			{
				$main_menu = $this->Menu_model->insert_data($data_insert);
			}
			else
			{
				$main_menu = $this->Menu_model->update_data($data_insert,$this->input->post('ID'));
			}

			redirect(site_url('admin/menu_lists'), 'refresh');
		}
	}
	// end function
	
	public function menu_delete($id=''){
		$this->load->model('Menu_model');
		$this->Menu_model->delete_menu($id);
		redirect(site_url('admin/menu_lists'), 'refresh');
	}

	// ---------------------- Category Controller -------------------------- //

	public function category_lists()
	{
		$this->load->model('Category_model');
		$data['title'] = 'Category List';

		$res = $this->Category_model->get_category();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('admin/category/lists', $data);
	}

	public function category_add($id='')
	{
		$this->load->model('Category_model');
		$data['title'] = 'Add Category';

		$selected = '';
		if($id!=''){
			$result = $this->Category_model->get_data($id);
			$data['result'] = $result;
			$selected = $result->Parent;
		}
		$main_menu = $this->Category_model->get_menu_structure($selected);
		$data['menu_dropdownlist'] = $main_menu;	

		$this->form_validation->set_rules('Parent', 'Parent Category', 'required');
		$this->form_validation->set_rules('CategoryNameTH', 'Category Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('CategoryNameEN', 'Category Name (EN)', 'required|min_length[1]');
		$this->form_validation->set_rules('Position', 'Position', 'required|numeric');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/category/add', $data);

		}
		else
		{

			$_data = $this->Category_model->get_data($this->input->post('Parent'));
			$next_level = (count($_data) > 0) ? $_data->Level + 1: 1;
			$data_insert = array(
				'Parent' => $this->input->post('Parent'),
				'Level' => $next_level,
				'CategoryNameEN' => $this->input->post('CategoryNameEN'),
				'CategoryNameTH' => $this->input->post('CategoryNameTH'),
				'Position' => $this->input->post('Position'),
				'Status' => $this->input->post('Status')
			);
			if($this->input->post('ID') == '')
			{
				$main_menu = $this->Category_model->insert_data($data_insert);
			}
			else
			{
				$main_menu = $this->Category_model->update_data($data_insert,$this->input->post('ID'));
			}
			redirect(site_url('admin/category_lists'), 'refresh');
		}

	}	

	public function category_delete($id='')
	{
		$this->load->model('Category_model');
		$this->Category_model->delete($id);
		redirect(site_url('admin/category_lists'), 'refresh');

	}


	// ---------------------- Product Controller -------------------------- //

	public function product_lists()
	{
		$this->load->model('Product_model');
		$data['title'] = 'Product List';

		$res = $this->Product_model->get_lists();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('admin/product/lists', $data);
	}

	public function product_add($id='')
	{
		$this->load->model('Product_model');
		$data['title'] = 'Add Product';

		$selected = '';
		if($id!=''){
			$result = $this->Product_model->get_data($id);
			$data['result'] = $result;
			$selected = $result->CategoryID;
		}
		$main_menu = $this->Product_model->get_menu_structure($selected);
		$data['menu_dropdownlist'] = $main_menu;	

		$this->form_validation->set_rules('Parent', 'Category', 'required');
		$this->form_validation->set_rules('TradeName', 'Trade Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('CommonName', 'Common Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('Formula', 'Formula', 'required|min_length[1]');
		$this->form_validation->set_rules('Detail', 'Detail', 'required|min_length[1]');
		$this->form_validation->set_rules('Contain', 'Contain', 'required|min_length[1]');
		$this->form_validation->set_rules('Suggestion', 'Suggestion', 'required|min_length[1]');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/product/add', $data);

		}
		else
		{
			
			/* ---------------- Upload Image ------------------- */
			$config['upload_path'] = 'upload/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '500';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('upload_error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$Image = $data['upload_data']['file_name'];
			}
			/* ---------------- Upload Image ------------------- */
			if((isset($Image)) && ($Image != '')){
				$data_insert = array(
					'CategoryID' => $this->input->post('Parent'),
					'TradeName' => $this->input->post('TradeName'),
					'CommonName' => $this->input->post('CommonName'),
					'Formula' => $this->input->post('Formula'),
					'Detail' => $this->input->post('Detail'),
					'Contain' => $this->input->post('Contain'),
					'Suggestion' => $this->input->post('Suggestion'),
					'Image' => $Image,
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
			redirect(site_url('admin/product_lists'), 'refresh');
		}

	}	

	public function product_delete($id='')
	{
		$this->load->model('Product_model');
		$this->Product_model->delete($id);
		redirect(site_url('admin/product_lists'), 'refresh');

	}

	// ---------------------- Content Controller -------------------------- //

	public function content_lists()
	{
		$this->load->model('User_model');
		$data['title'] = 'Content List';

		$res = $this->User_model->get_list();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('admin/content/lists', $data);
	}

	public function content_add($id='')
	{
		$this->load->model('User_model');
		$data['title'] = 'Add Content';

		$selected = '';
		$selected2 = '';
		if($id!=''){
			$result = $this->User_model->get_data($id);
			$data['result'] = $result;
			$selected = $result->MenuID;
			$selected2 = $result->TemplateID;
		}

		$main_menu = $this->User_model->get_menu_structure($selected);
		$data['menu_dropdownlist'] = $main_menu;	

		$template = $this->User_model->get_template_dropdownlist($selected2);
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
			$this->load->view('admin/content/add', $data);

		}
		else
		{

			$data_insert = array(
				'MenuID' => $this->input->post('MenuID'),
				'TemplateID' => $this->input->post('TemplateID'),
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
				$main_menu = $this->User_model->insert_data($data_insert);
			}
			else
			{
				$main_menu = $this->User_model->update_data($data_insert,$this->input->post('ID'));
			}

			redirect(site_url('admin/content_lists'), 'refresh');
		}

	}	

	public function content_delete($id='')
	{
		$this->load->model('User_model');
		$this->User_model->delete_data($id);
		redirect(site_url('admin/content_lists'), 'refresh');

	}

	// ---------------------- User Controller -------------------------- //

	public function user_lists()
	{
		$this->load->model('User_model');
		$data['title'] = 'User List';

		$res = $this->User_model->get_lists();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('admin/user/lists', $data);
	}

	public function user_add($id='')
	{
		$this->load->model('User_model');
		$data['title'] = 'Add User';

		$selected = '';
		$selected2 = '';
		if($id !=''){
			$result = $this->User_model->get_data($id);
			$data['result'] = $result;
		}

		$this->form_validation->set_rules('UserType', 'User Type', 'required');

		if($this->input->post('ID') !=''){
			$this->form_validation->set_rules('UserName', 'UserName', 'required|min_length[4]');
		}else{
			$this->form_validation->set_rules('UserName', 'UserName', 'required|min_length[4]|is_unique[user.UserName]');
		}
		$this->form_validation->set_rules('Password', 'Password', 'required|min_length[6]');	
		$this->form_validation->set_rules('FullName', 'FullName', 'required|min_length[1]');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|min_length[1]');										

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/user/add', $data);

		}
		else
		{

			$data_insert = array(
				'UserType' => $this->input->post('UserType'),
				'UserName' => $this->input->post('UserName'),
				'Password' => $this->input->post('Password'),
				'FullName' => $this->input->post('FullName'),
				'Email' => $this->input->post('Email'),
				'Status' => $this->input->post('Status')
			);
			if($this->input->post('ID') == '')
			{
				$result = $this->User_model->insert_data($data_insert);
				/*if(!$result){
					$data['message_display'] = 'This user exists in system.';
					$this->load->view('header', $data);
					$this->load->view('admin/user/add', $data);
				}*/
			}
			else
			{
				$result = $this->User_model->update_data($data_insert,$this->input->post('ID'));
			}

			redirect(site_url('admin/user_lists'), 'refresh');
		}

	}	

	public function user_delete($id='')
	{
		$this->load->model('User_model');
		$this->User_model->delete($id);
		redirect(site_url('admin/user_lists'), 'refresh');

	}


}
