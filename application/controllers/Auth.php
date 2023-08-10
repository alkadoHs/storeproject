<?php

class Auth extends CI_Controller
{
    public function login_index() {
        $this->load->view('login');
    }

    public function register() {
        $this->load->view('signup');
    }
}