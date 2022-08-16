<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();


        $this->load->library('form_validation');

        $this->load->model('register_model');
    }

    function index()
    {
        $this->load->view('register');
    }

    function validation()
    {
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim|alpha');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('userPaymentAccount', 'userPaymentAccount','required|alpha_numeric');

        if($this->form_validation->run())
        {
            $data = array(
                'user_name'  => $this->input->post('user_name'),
                'user_email'  => $this->input->post('user_email'),
                'password' => $this->input->post('password'),
                'userPaymentAccount' => $this->input->post('userPaymentAccount'),
            );
            $this->register_model->insert($data);
            redirect('http://localhost/WeddingService/login');
        }
        else
        {
            $this->index();
        }
    }



}

?>