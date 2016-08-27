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

	public function index($filter='')
	{
		$this->load->model('Menu_model');
		$data['title'] = 'Menu List';

		$res = $this->Menu_model->get_menu($filter);
		$data['result'] = $res;

		$main_menu = $this->Menu_model->get_menu_structure($filter);
		$data['menu_dropdownlist'] = $main_menu;	

		$this->load->view('header', $data);
		$this->load->view('admin/menu/lists', $data);
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

	public function menu_lists($filter=''){
		$this->load->model('Menu_model');
		$data['title'] = 'Menu List';

		$res = $this->Menu_model->get_menu($filter);
		$data['result'] = $res;

		$main_menu = $this->Menu_model->get_menu_structure($filter);
		$data['menu_dropdownlist'] = $main_menu;	

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

			/* ---------------- Upload Image ------------------- */

			$config['upload_path'] = 'upload/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '500';

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


			$_data = $this->Menu_model->get_data($this->input->post('Parent'));
			$next_level = (count($_data) > 0) ? $_data->Level + 1: 1;
			$data_insert = array(
				'Parent' => $this->input->post('Parent'),
				'Level' => $next_level,
				'MenuNameEN' => $this->input->post('MenuNameEN'),
				'MenuNameTH' => $this->input->post('MenuNameTH'),
				//'Image' => $Image,
				'ImageCaption' => $this->input->post('ImageCaption'),
				'Position' => $this->input->post('Position'),
				'Status' => $this->input->post('Status')
			);
			if((isset($Image)) && ($Image != '')){
					$data_insert['Image'] = $Image;
			}

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

		//$this->form_validation->set_rules('Parent', 'Category', 'required');
		$this->form_validation->set_rules('TradeName', 'Trade Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('CommonName', 'Common Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('Formula', 'Formula', 'required|min_length[1]');
		$this->form_validation->set_rules('Detail', 'Detail', 'required|min_length[1]');
		$this->form_validation->set_rules('Contain', 'Contain', 'required|min_length[1]');
		//$this->form_validation->set_rules('Suggestion', 'Suggestion', 'required|min_length[1]');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/product/add', $data);

		}
		else
		{
			
			/* ---------------- Upload Image ------------------- */

			$config['upload_path'] = 'upload/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']	= '1000';

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

			if($this->input->post('ID') == '')
			{
				$data_insert = array(
					//'CategoryID' => $this->input->post('Parent'),
					'TradeName' => $this->input->post('TradeName'),
					'CommonName' => $this->input->post('CommonName'),
					'Formula' => $this->input->post('Formula'),
					'Detail' => $this->input->post('Detail'),
					'Contain' => $this->input->post('Contain'),
					'Suggestion' => $this->input->post('Suggestion'),
					'Warning' => $this->input->post('Warning'),
					'Benefit' => $this->input->post('Benefit'),
					'Remark' => $this->input->post('Remark'),
					'DangerousNo' => $this->input->post('DangerousNo'),
					'Status' => $this->input->post('Status')
				);
				$main_menu = $this->Product_model->insert_data($data_insert);
			}
			else
			{
				$data_insert = array(
					//'CategoryID' => $this->input->post('Parent'),
					'TradeName' => $this->input->post('TradeName'),
					'CommonName' => $this->input->post('CommonName'),
					'Formula' => $this->input->post('Formula'),
					'Detail' => $this->input->post('Detail'),
					'Contain' => $this->input->post('Contain'),
					'Suggestion' => $this->input->post('Suggestion'),
					'Warning' => $this->input->post('Warning'),
					'Remark' => $this->input->post('Remark'),
					'Benefit' => $this->input->post('Benefit'),
					'DangerousNo' => $this->input->post('DangerousNo'),
					'Status' => $this->input->post('Status')
				);
				if((isset($Image)) && ($Image != '')){
					$data_insert['Image'] = $Image;
				}
				if((isset($BrandImage)) && ($BrandImage != '')){
					$data_insert['BrandImage'] = $BrandImage;
				}
				
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

	public function content_lists($filter='')
	{
		$this->load->model('Content_model');
		$data['title'] = 'Content List';

		$res = $this->Content_model->get_list($filter);
		$data['result'] = $res;
		
		$main_menu = $this->Content_model->get_menu_structure($filter);
		$data['menu_dropdownlist'] = $main_menu;	

		$this->load->view('header', $data);
		$this->load->view('admin/content/lists', $data);
	}

	public function content_add($id='')
	{
		$this->load->model('Content_model');
		$data['title'] = 'Add Content';

		$selected = '';
		$selected2 = '';
		$selected3 = '';
		$selected4 = '';
		$selected5 = '';
		if($id!=''){
			$result = $this->Content_model->get_data($id);
			$data['result'] = $result;
			$selected = $result->MenuID;
			$selected2 = $result->TemplateID;
			$selected3 = $result->ProductID;
			$selected4 = $result->SliderID;
			$selected5 = $result->CalendarID;
		}

		$main_menu = $this->Content_model->get_menu_structure($selected);
		$data['menu_dropdownlist'] = $main_menu;	

		$template = $this->Content_model->get_template_dropdownlist($selected2);
		$data['template_dropdownlist'] = $template;

		$product = $this->Content_model->get_product_dropdownlist($selected3);
		$data['product_dropdownlist'] = $product;
		
		$cropcalendar = $this->Content_model->get_cropcalendar_dropdownlist($selected5);
		$data['cropcalendar_dropdownlist'] = $cropcalendar;

		$slider = $this->Content_model->get_slider_dropdownlist($selected4);
		$data['slider_dropdownlist'] = $slider;
		
		$this->form_validation->set_rules('MenuID', 'Menu', 'required');
		$this->form_validation->set_rules('TemplateID', 'Template', 'required');
		//$this->form_validation->set_rules('SliderID', 'Slider', 'required');
		$this->form_validation->set_rules('ContentNameTH', 'Content Name (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('ContentNameEN', 'Content Name (EN)', 'required|min_length[1]');	
		$this->form_validation->set_rules('PageTitleTH', 'Page Title (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('PageTitleEN', 'Page Title (EN)', 'required|min_length[1]');
		$this->form_validation->set_rules('PageHeadlineTH', 'Page Headline (TH)', 'required|min_length[1]');
		$this->form_validation->set_rules('PageHeadlineEN', 'Page eadline (EN)', 'required|min_length[1]');
		//$this->form_validation->set_rules('ContentTH', 'Content (TH)', 'required|min_length[1]');
		//$this->form_validation->set_rules('ContentEN', 'Content (EN)', 'required|min_length[1]');
		//$this->form_validation->set_rules('MetaKeywordTH', 'Meta Keyword (TH)', 'required|min_length[1]');
		//$this->form_validation->set_rules('MetaKeywordEN', 'Meta Keyword (EN)', 'required|min_length[1]');	
		//$this->form_validation->set_rules('MetaDescriptionTH', 'Meta Description (TH)', 'required|min_length[1]');
		//$this->form_validation->set_rules('MetaDescriptionEN', 'Meta Description (EN)', 'required|min_length[1]');										
		//$this->form_validation->set_rules('Slug', 'Slug', 'required|min_length[1]|is_unique[content.Slug]');										
		$this->form_validation->set_rules('Slug', 'Slug', 'required|min_length[1]');										
		//$this->form_validation->set_rules('Url', 'Url', 'required|min_length[1]');										
		
		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/content/add', $data);

		}
		else
		{
			
			$template_data = $this->Content_model->get_template_data($this->input->post('TemplateID'));
			$url = $template_data->ViewName.'/'.$this->input->post('Slug');
			$data_insert = array(
				'MenuID' => $this->input->post('MenuID'),
				'TemplateID' => $this->input->post('TemplateID'),
				'ProductID' => $this->input->post('ProductID'),
				'CalendarID' => $this->input->post('CalendarID'),
				'SliderID' => $this->input->post('SliderID'),
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
				'Slug' => $this->input->post('Slug'),
				'Url' => $url,
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

			redirect(site_url('admin/content_lists'), 'refresh');
		}

	}	

	public function content_delete($id='')
	{
		$this->load->model('User_model');
		$this->User_model->delete_data($id);
		redirect(site_url('admin/content_lists'), 'refresh');

	}


		// ---------------------- Slider Controller -------------------------- //

	public function slider_lists()
	{
		$this->load->model('Slider_model');
		$data['title'] = 'Slider List';

		$res = $this->Slider_model->get_lists();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('admin/slider/lists', $data);
	}

	public function slider_add($id='')
	{
		$this->load->model('Slider_model');
		$data['title'] = 'Add Slider';

		$selected = '';
		if($id!=''){
			$result = $this->Slider_model->get_data($id);
			$data['result'] = $result;
		}

		$this->form_validation->set_rules('SliderTopLine', 'Slider Topline', 'required|min_length[5]');
		$this->form_validation->set_rules('SliderHeadLine', 'Slider Headline', 'required|min_length[5]');
		$this->form_validation->set_rules('SliderDetail', 'Slider Detail', 'required|min_length[10]');
		$this->form_validation->set_rules('SliderLink', 'Slider Link', 'required|min_length[1]');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/slider/add', $data);

		}
		else
		{
			
			/* ---------------- Upload Image ------------------- */

			$config['upload_path'] = 'upload/banner/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '500';

			$this->load->library('upload', $config);

			/* ---------------- Upload Image ------------------- */
			if ( ! $this->upload->do_upload('sliderimage'))
			{
				$error = array('upload_error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$SliderImage = $data['upload_data']['file_name'];
			}
			
			if($this->input->post('ID') == '')
			{
				$data_insert = array(
					'SliderTopLine' => $this->input->post('SliderTopLine'),
					'SliderHeadLine' => $this->input->post('SliderHeadLine'),
					'SliderDetail' => $this->input->post('SliderDetail'),
					'SliderLink' => $this->input->post('SliderLink'),
					'ShowHome' => $this->input->post('ShowHome'),
					'Status' => $this->input->post('Status')
				);
				if((isset($SliderImage)) && ($SliderImage != '')){
					$data_insert['SliderImage'] = $SliderImage;
				}
				$main_menu = $this->Slider_model->insert_data($data_insert);
			}
			else
			{
				$data_insert = array(
					'SliderTopLine' => $this->input->post('SliderTopLine'),
					'SliderHeadLine' => $this->input->post('SliderHeadLine'),
					'SliderDetail' => $this->input->post('SliderDetail'),
					'SliderLink' => $this->input->post('SliderLink'),
					'ShowHome' => $this->input->post('ShowHome'),
					'Status' => $this->input->post('Status')
				);
				if((isset($SliderImage)) && ($SliderImage != '')){
					$data_insert['SliderImage'] = $SliderImage;
				}
				
				$main_menu = $this->Slider_model->update_data($data_insert,$this->input->post('ID'));
			}
			redirect(site_url('admin/slider_lists'), 'refresh');
		}

	}	

	public function slider_delete($id='')
	{
		$this->load->model('Slider_model');
		$this->Product_model->delete($id);
		redirect(site_url('admin/slider_lists'), 'refresh');

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


		// ---------------------- Crop Calendar Controller -------------------------- //

	public function cropcalendar_lists()
	{
		$this->load->model('Cropcalendar_model');
		$data['title'] = 'Cropcalendar List';

		$res = $this->Cropcalendar_model->get_lists();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('admin/cropcalendar/lists', $data);
	}

	public function cropcalendar_add($id='')
	{
		$this->load->model('Cropcalendar_model');
		$data['title'] = 'Add Cropcalendar';

		$selected = '';
		if($id!=''){
			$result = $this->Cropcalendar_model->get_data($id);
			$data['result'] = $result;
		}


		$this->form_validation->set_rules('CalendarName', 'Calendar Name', 'required|min_length[2]');
		$this->form_validation->set_rules('TextLeft', 'Text Left', 'required|min_length[2]');
		$this->form_validation->set_rules('TextRight', 'Text Right', 'required|min_length[2]');
		$this->form_validation->set_rules('Position', 'Position', 'required|min_length[1]');

		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/cropcalendar/add', $data);

		}
		else
		{
			
			/* ---------------- Upload Image ------------------- */

			$config['upload_path'] = 'upload/cropcalendar/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']	= '500';

			$this->load->library('upload', $config);

			/* ---------------- Upload Image ------------------- */
			if ( ! $this->upload->do_upload('headerimage'))
			{
				$error = array('upload_error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$HeaderImage = $data['upload_data']['file_name'];
			}

			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('upload_error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$Image = $data['upload_data']['file_name'];
			}
			
			if($this->input->post('ID') == '')
			{
				$data_insert = array(
					'CalendarName' => $this->input->post('CalendarName'),
					'TextLeft' => $this->input->post('TextLeft'),
					'TextRight' => $this->input->post('TextRight'),
					'Position' => $this->input->post('Position'),
					'Status' => $this->input->post('Status')
				);
				if((isset($HeaderImage)) && ($HeaderImage != '')){
					$data_insert['HeaderImage'] = $HeaderImage;
				}
				if((isset($Image)) && ($Image != '')){
					$data_insert['Image'] = $Image;
				}
				$main_menu = $this->Cropcalendar_model->insert_data($data_insert);
			}
			else
			{
				$data_insert = array(
					'CalendarName' => $this->input->post('CalendarName'),
					'TextLeft' => $this->input->post('TextLeft'),
					'TextRight' => $this->input->post('TextRight'),
					'Position' => $this->input->post('Position'),
					'Status' => $this->input->post('Status')
				);
				if((isset($HeaderImage)) && ($HeaderImage != '')){
					$data_insert['HeaderImage'] = $HeaderImage;
				}
				if((isset($Image)) && ($Image != '')){
					$data_insert['Image'] = $Image;
				}
				
				$main_menu = $this->Cropcalendar_model->update_data($data_insert,$this->input->post('ID'));
			}
			redirect(site_url('admin/cropcalendar_lists'), 'refresh');
		}

	}	

	public function cropcalendar_sub_lists($calendar_id='')
	{
		$this->load->model('Cropcalendar_model');
		$data['title'] = 'Chart List';

		$res = $this->Cropcalendar_model->get_sub_lists($calendar_id);
		$data['result'] = $res;

		$data['calendar_id'] = $calendar_id;

		$this->load->view('header', $data);
		$this->load->view('admin/cropcalendar/chart_lists', $data);
	}

	public function chart_add($calendar_id='',$id='')
	{
		$this->load->model('Cropcalendar_model');
		$data['title'] = 'Add/Edit Chart';

		$selected = '';
		if($id !=''){
			$result = $this->Cropcalendar_model->get_sub_data($id);
			$data['result'] = $result;
			$cropcalendar_name = $this->Cropcalendar_model->get_data($result->CalendarID);
			$data['cropcalendar_name'] = $cropcalendar_name->CalendarName;
			$data['CalendarID'] = $result->CalendarID;
		}else{
			if($calendar_id != ''){
					$cropcalendar_name = $this->Cropcalendar_model->get_data($calendar_id);
					$data['cropcalendar_name'] = $cropcalendar_name->CalendarName;
					$data['CalendarID'] = $calendar_id;
			}
		}

		$this->form_validation->set_rules('BarTitleName', 'Bar Title Name', 'required|min_length[2]');
		$this->form_validation->set_rules('BarColorClass', 'Color Class', 'required');
		$this->form_validation->set_rules('BarMarginLeft', 'Margin Left', 'required');
		$this->form_validation->set_rules('BarWidth', 'Bar Width', 'required');
		$this->form_validation->set_rules('Position', 'Position', 'required');
		if ($this->form_validation->run() === FALSE)
		{

			$this->load->view('header', $data);
			$this->load->view('admin/cropcalendar/chart_add', $data);

		}
		else
		{
			
			/* ---------------- Upload Image ------------------- */

			$config['upload_path'] = 'upload/cropcalendar/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']	= '500';

			$this->load->library('upload', $config);

			/* ---------------- Upload Image ------------------- */
			if ( ! $this->upload->do_upload('brandimage'))
			{
				$error = array('upload_error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$BrandImage = $data['upload_data']['file_name'];
			}

			if($this->input->post('ID') == '')
			{
				$data_insert = array(
					'CalendarID' => $this->input->post('CalendarID'),
					'BarTitleName' => $this->input->post('BarTitleName'),
					'BarTagName' => $this->input->post('BarTagName'),
					'BarColorClass' => $this->input->post('BarColorClass'),
					'BarMarginLeft' => $this->input->post('BarMarginLeft'),
					'BarWidth' => $this->input->post('BarWidth'),
					'Position' => $this->input->post('Position'),
					'Status' => $this->input->post('Status')
				);
				if((isset($BrandImage)) && ($BrandImage != '')){
					$data_insert['BrandImage'] = $BrandImage;
				}
				$insert_id = $this->Cropcalendar_model->insert_sub_data($data_insert);
			}
			else
			{
				$data_insert = array(
					'CalendarID' => $this->input->post('CalendarID'),
					'BarTitleName' => $this->input->post('BarTitleName'),
					'BarTagName' => $this->input->post('BarTagName'),
					'BarColorClass' => $this->input->post('BarColorClass'),
					'BarMarginLeft' => $this->input->post('BarMarginLeft'),
					'BarWidth' => $this->input->post('BarWidth'),
					'Position' => $this->input->post('Position'),
					'Status' => $this->input->post('Status')
				);
				if((isset($BrandImage)) && ($BrandImage != '')){
					$data_insert['BrandImage'] = $BrandImage;
				}
				
				$main_menu = $this->Cropcalendar_model->update_chart_data($data_insert,$this->input->post('ID'));
			}
			if($_POST['ID'] != ''){
				redirect(site_url('admin/cropcalendar/edit_chart/'.$this->input->post('CalendarID').'/'.$_POST['ID']), 'refresh');
			}else{
				redirect(site_url('admin/cropcalendar/edit_chart/'.$this->input->post('CalendarID').'/'.$insert_id), 'refresh');
			}
			//redirect(site_url('admin/cropcalendar_sub_lists/'.$this->input->post('CalendarID')), 'refresh');
		}

	}
	
	public function cropcalendar_delete($id='')
	{
		$this->load->model('Cropcalendar_model');
		$this->Cropcalendar_model->delete($id);
		redirect(site_url('admin/cropcalendar_lists'), 'refresh');
	}
	
	public function cropcalendar_delete_chart($calendar_id='',$id='')
	{
		$this->load->model('Cropcalendar_model');
		$this->Cropcalendar_model->delete_chart($id);
		redirect(site_url('admin/cropcalendar_sub_lists/'.$calendar_id), 'refresh');
	}



}
