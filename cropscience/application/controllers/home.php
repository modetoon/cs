<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model('Frontcontent_model');

    }

	public function index()
	{
		$this->load->helper('url');
		$data['page_title'] = 'Homepage - Bayer';
		$data['top_menu'] = top_menu('home');
		$data['left_menu_home'] = left_menu_home();
		$data['meta_keyword'] = '';
		$data['meta_description'] = '';

		$this->load->view('header_front',$data);
		$this->load->view('home');
	}
	
	public function content($menu_slug='')
	{
		$this->load->helper('url');
		$menu_data = $this->Frontcontent_model->get_menudata($menu_slug);
		
		$data['left_menu_content'] = left_menu_content($menu_data->MenuID,$menu_data->Level,$menu_data->Parent);
		$parent_data = $this->Frontcontent_model->get_content($menu_data->Parent);
		$parent_menu_data = $this->Frontcontent_model->get_menu($menu_data->Parent);
		$data['page_parent_headline'] = '';
		if(count($parent_data) > 0){
			$data['page_parent_headline'] = $parent_data->PageTitleEN;
			$data['top_menu'] = top_menu($parent_menu_data->Slug);
		}else{
			$data['top_menu'] = top_menu($menu_slug);
		}
		
		$content_data = $this->Frontcontent_model->get_content($menu_data->MenuID);
		$data['meta_keyword'] = $content_data->MetaKeywordEN;
		$data['meta_description'] = $content_data->MetaDescriptionEN;
		$data['page_title'] = 'Bayer - '.$content_data->PageTitleEN;
		$data['page_headline'] = $content_data->PageHeadlineEN;
		$data['content'] = $content_data->ContentEN;
		$view_data = $this->Frontcontent_model->get_view($content_data->TemplateID);

		$this->load->view('header_front_breadcrump',$data);
		$this->load->view($view_data->ViewName);
	}
	
	public function product_list($menu_slug='')
	{
		$this->load->helper('url');
		$menu_data = $this->Frontcontent_model->get_menudata($menu_slug);
		
		$data['left_menu_content'] = left_menu_content($menu_data->MenuID,$menu_data->Level,$menu_data->Parent);
		$parent_data = $this->Frontcontent_model->get_content($menu_data->Parent);
		$parent_menu_data = $this->Frontcontent_model->get_menu($menu_data->Parent);
		$data['page_parent_headline'] = '';
		if(count($parent_data) > 0){
			$data['page_parent_headline'] = $parent_data->PageTitleEN;
			if(count($parent_menu_data) > 0){
				$data['top_menu'] = top_menu($parent_menu_data->Slug);
			}else{
				$data['top_menu'] = top_menu($parent_menu_data->Slug);
			}
		}else{
			$data['top_menu'] = top_menu($menu_slug);
		}
		
		$content_data = $this->Frontcontent_model->get_content($menu_data->MenuID);
		$data['meta_keyword'] = $content_data->MetaKeywordEN;
		$data['meta_description'] = $content_data->MetaDescriptionEN;
		$data['page_title'] = 'Bayer - '.$content_data->PageTitleEN;
		$data['page_headline'] = $content_data->PageHeadlineEN;
		$data['content'] = $content_data->ContentEN;
		$view_data = $this->Frontcontent_model->get_view($content_data->TemplateID);
		
		$this->load->view('header_product_list.php',$data);
		$this->load->view($view_data->ViewName);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */