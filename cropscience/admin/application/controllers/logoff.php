<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logoff extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

    }

	public function index()
	{
		   $data = array(
							   'user_id'  => '',
							   'user_name'  => '',
							   'email'     => '',
							   'logged_in' => FALSE
						   );

		$this->session->unset_userdata($data);
		redirect(site_url('login'));
	}


}
