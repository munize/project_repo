<?php
class New_user extends CI_Controller
{
    function index()
    {
        $this->load->model('user_management/add_user');
    }
}
?>
