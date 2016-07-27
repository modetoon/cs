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
		$this->load->model('Menu_model');

    }

	public function index()
	{
		$data = array('title'=> 'Listing');

		$this->load->view('header', $data);
		$this->load->view('menu/listing');
	}

	public function listing()
	{
		$data['title'] = 'Listing';

		$res = $this->Menu_model->get_menu();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('menu/listing', $data);
	}

	public function add()
	{
		$data['title'] = 'Add Menu';

		$res = $this->Menu_model->get_menu();
		$data['result'] = $res;

		$this->load->view('header', $data);
		$this->load->view('menu/add', $data);
	}	

}
