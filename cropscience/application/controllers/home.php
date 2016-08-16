<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model('Frontcontent_model');
		if($this->session->userdata('site_lang') == ''){
			$language = "en";
			$this->session->set_userdata('site_lang', $language);
			$this->session->set_userdata('site_lang_db', strtoupper($language));
			$this->session->set_userdata('site_lang_url', $language.'/');
		}
		//echo $this->session->userdata('site_lang');die;
		//$this->lang->load("message", $this->session->userdata('site_lang')); // Load language
    }

	public function index()
	{
		$this->load->helper('url');

		$data['page_title'] = 'Homepage - Bayer';
		//$data['page_title'] = 'Homepage - Bayer / '.$this->lang->line("business_operations");
		$data['top_menu'] = top_menu('home');
		$data['left_menu_home'] = left_menu_home();
		$data['slider'] = slider('home');

		$data['meta_keyword'] = '';
		$data['meta_description'] = '';

		$this->load->view('header_front',$data);
		$this->load->view('home',$data);
	}
	
	public function content($menu_slug='',$lang='')
	{
		$this->load->helper('url');

		$this->lang->load("message", $lang); // Load language
        $language = ($lang != "") ? $lang : "en";
        $this->session->set_userdata('site_lang', $language);
        $this->session->set_userdata('site_lang_db', strtoupper($language));
        $this->session->set_userdata('site_lang_url', $language.'/');

		$meta_fld = 'MetaKeyword'.$this->session->userdata('site_lang_db');
		$pagetitle_fld = 'PageTitle'.$this->session->userdata('site_lang_db');
		$meta_description_fld = 'MetaDescription'.$this->session->userdata('site_lang_db');
		$page_headline_fld = 'PageHeadline'.$this->session->userdata('site_lang_db');
		$content_fld = 'Content'.$this->session->userdata('site_lang_db');

		$menu_data = $this->Frontcontent_model->get_menudata($menu_slug);
		$data['left_menu_content'] = left_menu_content($menu_data->MenuID,$menu_data->Level,$menu_data->Parent);
		$parent_data = $this->Frontcontent_model->get_content($menu_data->Parent);
		$parent_menu_data = $this->Frontcontent_model->get_menu($menu_data->Parent);
		$data['page_parent_headline'] = '';
		if(count($parent_data) > 0){
			$data['page_parent_headline'] = $parent_data->{$pagetitle_fld};
			$data['top_menu'] = top_menu($parent_menu_data->Slug);
		}else{
			$data['top_menu'] = top_menu($menu_slug);
		}
		$breadcrump = breadcrump($menu_slug);
		$data['breadcrump'] = $breadcrump;

		$content_data = $this->Frontcontent_model->get_content($menu_data->MenuID);

		$data['meta_keyword'] = $content_data->{$meta_fld};
		$data['meta_description'] = $content_data->{$meta_description_fld};
		$data['page_title'] = 'Bayer - '.$content_data->{$pagetitle_fld};
		$data['page_headline'] = $content_data->{$page_headline_fld};
		$data['content'] = $content_data->{$content_fld};
		$view_data = $this->Frontcontent_model->get_view($content_data->TemplateID);

		$this->load->view('header_front_breadcrump',$data);
		$this->load->view($view_data->ViewName);
	}
	
	public function product_list($menu_slug='', $lang)
	{
		$this->load->helper('url');

		$this->lang->load("message", $lang); // Load language
        $language = ($lang != "") ? $lang : "en";
        $this->session->set_userdata('site_lang', $language);
        $this->session->set_userdata('site_lang_db', strtoupper($language));
        $this->session->set_userdata('site_lang_url', $language.'/');

		$meta_fld = 'MetaKeyword'.$this->session->userdata('site_lang_db');
		$pagetitle_fld = 'PageTitle'.$this->session->userdata('site_lang_db');
		$meta_description_fld = 'MetaDescription'.$this->session->userdata('site_lang_db');
		$page_headline_fld = 'PageHeadline'.$this->session->userdata('site_lang_db');
		$content_fld = 'Content'.$this->session->userdata('site_lang_db');

		$menu_data = $this->Frontcontent_model->get_menudata($menu_slug);
		
		$data['left_menu_content'] = left_menu_content($menu_data->MenuID,$menu_data->Level,$menu_data->Parent);
		$data['slider'] = slider($menu_slug);
		
		$parent_data = $this->Frontcontent_model->get_content($menu_data->Parent);
		$parent_menu_data = $this->Frontcontent_model->get_menu($menu_data->Parent);
		$data['page_parent_headline'] = '';
		if(count($parent_data) > 0){
			$data['page_parent_headline'] = $parent_data->{$pagetitle_fld};
			if(count($parent_menu_data) > 0){
				$data['top_menu'] = top_menu($parent_menu_data->Slug);
			}else{
				$data['top_menu'] = top_menu($parent_menu_data->Slug);
			}
		}else{
			$data['top_menu'] = top_menu($menu_slug);
		}

		$breadcrump = breadcrump($menu_slug);
		$data['breadcrump'] = $breadcrump;
		
		$content_data = $this->Frontcontent_model->get_content($menu_data->MenuID);
		$data['meta_keyword'] = $content_data->{$meta_fld};
		$data['meta_description'] = $content_data->{$meta_description_fld};
		$data['page_title'] = 'Bayer - '.$content_data->{$pagetitle_fld};
		$data['page_headline'] = $content_data->{$page_headline_fld};
		$view_data = $this->Frontcontent_model->get_view($content_data->TemplateID);

		$data['content_abstract'] = $content_data->{$content_fld};
		$data['content'] = $this->Frontcontent_model->get_content_product_ul($menu_data->MenuID,$menu_data->Parent);
		
		$this->load->view('header_product_list.php',$data);
		$this->load->view($view_data->ViewName);
	}


	public function product_detail($menu_slug='', $lang)
	{
		$this->load->helper('url');

		$this->lang->load("message", $lang); // Load language
        $language = ($lang != "") ? $lang : "en";
        $this->session->set_userdata('site_lang', $language);
        $this->session->set_userdata('site_lang_db', strtoupper($language));
        $this->session->set_userdata('site_lang_url', $language.'/');

		$meta_fld = 'MetaKeyword'.$this->session->userdata('site_lang_db');
		$pagetitle_fld = 'PageTitle'.$this->session->userdata('site_lang_db');
		$meta_description_fld = 'MetaDescription'.$this->session->userdata('site_lang_db');
		$page_headline_fld = 'PageHeadline'.$this->session->userdata('site_lang_db');
		$content_fld = 'Content'.$this->session->userdata('site_lang_db');
		$contentname_fld = 'ContentName'.$this->session->userdata('site_lang_db');

		$menu_data = $this->Frontcontent_model->get_menudata($menu_slug);
		$parent_menu_data = $this->Frontcontent_model->get_parentdata($menu_data->Parent);
		//echo $parent_menu_data->MenuID;
		
		$data['left_menu_content'] = left_menu_productdetail($menu_data->MenuID,$menu_data->Parent,$parent_menu_data->MenuID);
		$parent_data = $this->Frontcontent_model->get_content($menu_data->Parent);
		$parent_menu_data = $this->Frontcontent_model->get_menu($menu_data->Parent);
		$data['page_parent_headline'] = '';
		if(count($parent_data) > 0){
			$data['page_parent_headline'] = $parent_data->{$pagetitle_fld};
			if(count($parent_menu_data) > 0){
				$data['top_menu'] = top_menu($parent_menu_data->Slug);
			}else{
				$data['top_menu'] = top_menu($parent_menu_data->Slug);
			}
		}else{
			$data['top_menu'] = top_menu($menu_slug);
		}

		$breadcrump = breadcrump($menu_slug);
		$data['breadcrump'] = $breadcrump;
		
		$content_data = $this->Frontcontent_model->get_content($menu_data->MenuID);

		$data['meta_keyword'] = $content_data->{$meta_fld};
		$data['meta_description'] = $content_data->{$meta_description_fld};
		$data['page_title'] = 'Bayer - '.$content_data->{$pagetitle_fld};
		$data['page_headline'] = $content_data->{$page_headline_fld};
		$view_data = $this->Frontcontent_model->get_view($content_data->TemplateID);
		
		$product_data = $this->Frontcontent_model->get_product_data($content_data->ProductID);
		$data['Category'] = $parent_data->{$contentname_fld};
		$data['TradeName'] = $product_data->TradeName;
		$data['CommonName'] = $product_data->CommonName;
		$data['Formula'] = $product_data->Formula;
		$data['Detail'] = $product_data->Detail;
		$data['Contain'] = $product_data->Contain;
		$data['Suggestion'] = $product_data->Suggestion;
		$data['Benefit'] = $product_data->Benefit;
		$data['Warning'] = $product_data->Warning;
		$data['DangerousNo'] = $product_data->DangerousNo;
		$data['Remark'] = $product_data->Remark;
		$data['Image'] = $product_data->Image;
		$data['BrandImage'] = $product_data->BrandImage;

		$this->load->view('header_product_detail.php',$data);
		$this->load->view($view_data->ViewName);
	}


}

