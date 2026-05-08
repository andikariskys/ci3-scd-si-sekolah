<?php 

class User extends CI_Controller
{
    function index() {
        $this->load->view('templates/header', ['title' => 'Halaman User']);
        $this->load->view('template');
        $this->load->view('templates/footer');
    }
}
