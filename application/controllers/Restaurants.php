<?php

class Restaurants extends CI_Controller
{
    public function index(){
        $this->page();
    }

    public function page($page=1){
        $this->load->model('restaurant');
        $restaurants=$this->restaurant->getAll($page);
        $data['restaurants']=$restaurants;
        $data['restaurant_count']=$this->restaurant->getCount();
        $this->load->view('restaurant',$data);
    }

    public function open($id){
        $this->load->model('restaurant');
        $data['restaurants']=$this->restaurant->getbyi($id);
        $data['meals']=$this->restaurant->getMealsbyi($id);
        $this->load->view('restaurant_view',$data);
    }

    public function search()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword == null){
            redirect(base_url('restaurants'));
        }else{
            $this->load->model('restaurant');
            $data['restaurants']=$this->restaurant->search($keyword);
            $data['restaurant_count']=$this->restaurant->searchCount($keyword);
            $this->load->view('restaurant',$data);
        }

    }

    public function reserve()
    {
        if($this->session->has_userdata('user_email')){
            $id = $this->input->post('restaurant_id');
            $location = $this->input->post('location');
            $reservetion_time=$this->input->post('reservetion_time');
            $this->load->model('meal');
            $this->load->model('restaurant');
            $this->load->model('reservations');
            $total = 0;
            $email_detail = 'We Need To Get Food To';
            $reseve_id=$this->reservations->addReserveRest(intval($id),$this->session->userdata('user_email'),$location,$reservetion_time);
            foreach ($_POST as $key => $amount) {
                $data[$key] = $this->input->post($key);
                if ($key != 'restaurant_id' && $key != 'location'&& $key!='reservetion_time') {
                    $meal_id = substr($key, 7);
                    $this->input->post($key);
                    $meal = $this->meal->getMealById($meal_id, $id);
                    foreach ($meal as $item) {
                        if($this->input->post($key)>0){
                            $this->reservations->addMeal($reseve_id,intval($meal_id),intval($this->input->post($key)));
                            $total = $total + ($this->input->post($key) * $item->meal_price);
                            $email_detail = $email_detail . ' 
 meal name :' . $item->meal_name . ' 
 meal_price :' . $item->meal_price . ' 
 amount :' . $this->input->post($key);
                        }
                    }
                }
            }
            $email_detail = $email_detail . '
             Total Price' . $total;
            $email_detail = $email_detail . '
             To Location ' . $location;
            $email_detail = $email_detail . '
             Please visit us to conform the order '.base_url('provider');
            $this->load->library('email');
            $resturant=$this->restaurant->getbyi($id);
            foreach ($resturant as $item){
                $this->email->to($item->res_email);
            }
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');

            $this->email->subject('Email Test');
            $this->email->message($email_detail);
            $this->email->send();
        }else{
            redirect(base_url('login'));
        }
    }

}
