<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 1/29/2019
 * Time: 4:24 PM
 */

class  Algorithm extends CI_Controller
{
    public function index(){
            $this->load->model('hall');
            $data['halls']=$this->hall->getAllOfThem();
            $this->load->view('algorithm/main',$data);
    }

    public function add(){
        if($this->session->has_userdata('user_email')){
            $user_eamil= $this->session->userdata('user_email');;
            $this->db->where('user_email', $user_eamil);
            foreach ($this->db->get('user')->result() as $user){
                $this->load->model('algorithms');
                $hall_id=$this->input->post('hall');
                $wedding_id=$this->algorithms->addWedding($hall_id,$user->user_id);
                $guestsNames=$this->input->post('geust_name');
                $geust_age=$this->input->post('geust_age');
                $relation=$this->input->post('relation');
                $groomOrBride=$this->input->post('groomOrBride');
                $priority=$this->input->post('priority');
                $gender=$this->input->post('gender');
                $this->algorithms->addGeusts($guestsNames,$geust_age,$relation,$groomOrBride,$priority,$gender,$wedding_id);
            }
        }else{
            redirect(base_url('login'));
        }
    }

    public function algo($wedding_id){
        $this->load->model('algorithms');
        $data=$this->algorithms->getAlgoData($wedding_id);
        $this->load->view('algorithm/tablesview',$data);
    }
}