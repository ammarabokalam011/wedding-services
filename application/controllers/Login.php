<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('login');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function validation()
    {
//        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
            if($result == true)
            {
                $this->session->set_userdata('user_email', $this->input->post('user_email'));

                redirect('http://localhost/WeddingService/index.php');
            }
            else
            {
                redirect('login');
            }
        }
        else
        {
            $this->index();
        }
    }

}

?>