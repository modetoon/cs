<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

	public function index()
	{
		$this->load->helper('url');
		$data['page_title'] = 'Homepage - Bayer';
		$data['top_menu'] = top_menu();
		$this->load->view('header_front',$data);
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */