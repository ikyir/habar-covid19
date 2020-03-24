<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Habar extends CI_Controller
{
    var $API = "";
    function __construct()
    {
        parent::__construct();
        $this->API = "https://api.kawalcorona.com/indonesia/provinsi";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('from');
        $this->load->helper('url');
    }

    public function index()
    {
        $json = file_get_contents('https://api.kawalcorona.com/indonesia');
        $obj['obj'] = json_decode($json);


        $this->load->view('habar/index', $obj);
    }

    public function negeriku()
    {
        $json = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
        $obj['obj'] = json_decode($json);

        $this->load->view('habar/negeriku', $obj);
    }

    public function dunia()
    {
        $json = file_get_contents('https://api.kawalcorona.com');
        $obj['obj'] = json_decode($json);

        $this->load->view('habar/dunia', $obj);
    }
}
