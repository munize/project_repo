<?php
class Page_loader extends CI_Controller
{
    function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
            function index()
    {
        $this->load->view('header/header');
        $this->load->view('sidebar/sidebar');
        $this->load->view('container/container');
    }
    function user_management()
    {
        $this->load->view('container/user_management');
    }
    function country()
    {
        $this->load->view('container/country');
    }
    function state()
    {
        $this->load->view('container/state');
    }
    function city()
    {
        $this->load->view('container/city');
    }
    function hotel()
    {
        $this->load->view('container/hotel');
    }
    function airline()
    {
        $this->load->view('container/airline');
    }
    function forms()
    {
        $this->load->view('container/forms');
    }
    function car()
    {
        $this->load->view('container/car');
    }
    function travel_management()
    {
        $this->load->view('container/travel_management');
    }
}
?>
