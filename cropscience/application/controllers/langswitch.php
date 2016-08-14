<?php
class LangSwitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function switchLanguage($language = "") {

        $language = ($language != "") ? $language : "en";
        $this->session->set_userdata('site_lang', $language);
        $this->session->set_userdata('site_lang_url', $language.'/');
        redirect(base_url());

    }
}
?>