<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

		is_logged_in();

    }

	public function index()
	{
		$this->load->helper('url');
		$data = array('title'=> 'Home');
		$this->load->view('header', $data);
		$this->load->view('dashboard');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */