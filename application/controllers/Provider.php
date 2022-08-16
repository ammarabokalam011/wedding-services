<?php
/**
 * Created by PhpStorm.
 * User: rawan
 * Date: 2/19/2019
 * Time: 11:56 AM
 */

class Provider extends CI_Controller{

    public function index(){
        $this->load->view('login_provider');
    }

    public function login(){
        $this->session->sess_destroy();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_email', 'Username', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }else
        {
            $email=$this->input->post('user_email');
            $password=$this->input->post('user_password');
            $this->load->model('providers');
            switch ($this->input->post('type')){
                case 'hall':
                    $hall=$this->providers->checkHall($email,$password);
                    if($hall==null){
                        $this->index();
                        break;
                    }
                    $this->session->set_userdata('email', $email);
                    $this->hall();
                    break;
                case 'salon':
                    $salon=$this->providers->checkSalon($email,$password);
                    if($salon==null){
                        $this->index();
                        break;
                    }
                    $this->session->set_userdata('email', $email);
                    $this->salon();

                    break;
                case 'restaurant':
                    $returent=$this->providers->checkRest($email,$password);
                    if($returent==null){
                        $this->index();
                        break;
                    }
                    $this->session->set_userdata('email', $email);
                    $this->restaurant();

                    break;
                default:
                    $this->index();
            }
        }
    }

    public function restaurant(){
        $this->load->model('providers');
        $restaurant_id=$this->providers->getRestaurantId( $this->session->userdata('email'));
        $data['req']=$this->providers->getRestaurantReq($restaurant_id);
        $data['res']=$this->providers->getRestaurantRec($restaurant_id);
        $data['id']=$restaurant_id;
        $this->load->view('restaurant_provider',$data);
    }

    public function restaurant_approve_accept(){
        $this->load->model('reservations');
        $approvment_message=$this->input->post('approvment_message');
        $restaurant_id=$this->input->post('restaurant_id');
        $reserve_id=$this->input->post('reserve_id');

        if($this->reservations->accept_restaurant($restaurant_id,$reserve_id,$approvment_message)) {
            $this->load->library('email');
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');
            $this->load->model('restaurant');
            $reservation=$this->reservations->getReserveResturant($reserve_id);

            foreach ($reservation as $item) {
                $user=$this->reservations->getUserByReerveIdRestaurant($reserve_id);
                foreach ($user as $user_res){
                    $email_detail='Hello '.$user_res->user_name ;
                    $email_detail=$email_detail.'
'.$email_detail.$user_res->userPaymentAccount ;
                    $this->email->to($user_res->user_email);
                }
                $email_detail=$email_detail.$item->approvment_message;
                $email_detail=$email_detail.$item->date;
                $email_detail=$email_detail.$item->location;
                $meals=$this->reservations->getMealsbyi($reserve_id);
                foreach ($meals as $item) {
                    $meal=$this->restaurant->getMealbyid($item->meal_id);
                    foreach ($meal as $value){
                        $email_detail = $email_detail . ' 
     meal name :' . $value->meal_name . ' 
     meal_price :' . $value->meal_price . ' 
     amount :' . $item->quantity;
                    }
                }
            }
            $this->email->subject('You Reserve Get Approved Resturant');
            $this->email->message($email_detail);
            $this->email->send();
        }

    }
    public function restaurant_approve_denied(){
        $this->load->model('reservations');
        $approvment_message=$this->input->post('approvment_message');
        $restaurant_id=$this->input->post('restaurant_id');
        $reserve_id=$this->input->post('reserve_id');

        if($this->reservations->denied_restaurant($restaurant_id,$reserve_id,$approvment_message)) {
            $this->load->library('email');
            $user=$this->reservations->getUserByReerveIdRestaurant($reserve_id);
            foreach ($user as $item){
                $this->email->to($item->user_email);
            }
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');
            $this->load->model('restaurant');
            $reservation=$this->reservations->getReserveResturant($reserve_id);
            $email_detail='You Reserve Get Denied Resturant Message ';
            foreach ($reservation as $item) {
                $email_detail=$email_detail.$item->approvment_message;
                $email_detail=$email_detail.$item->date;
                $email_detail=$email_detail.$item->location;
                $email_detail=$email_detail.$item->approvment_message;
                $meals=$this->reservations->getMealsbyi($reserve_id);
                foreach ($meals as $item) {
                    $meal=$this->restaurant->getMealbyid($item->meal_id);
                    foreach ($meal as $value){
                        $email_detail = $email_detail . ' 
 meal name :' . $value->meal_name . ' 
 meal_price :' . $value->meal_price . ' 
 amount :' . $item->quantity;
                    }
                }
            }
            $this->email->subject('Reserve Denied');
            $this->email->message($email_detail);
            $this->email->send();
        }
    }

    public function hall(){
        $this->load->model('providers');
        $restaurant_id=$this->providers->getHallId( $this->session->userdata('email'));
        $data['req']=$this->providers->getHallReq($restaurant_id);

        $data['rec']=$this->providers->getHallRec($restaurant_id);
        $data['id']=$restaurant_id;
        $this->load->view('hall_provider',$data);
    }

    public function hall_approve_accept(){
        $this->load->model('reservations');
        $approvment_message=$this->input->post('approvment_message');
        $hall_id=$this->input->post('hall_id');
        $reserve_id=$this->input->post('reserve_id');
        if($this->reservations->accept_hall($hall_id,$reserve_id,$approvment_message)) {
            $this->load->library('email');
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');
            $reservation=$this->reservations->getReserveHall($reserve_id);
            foreach ($reservation as $item) {
                $user=$this->reservations->getUserByReerveIdHall($reserve_id);
                foreach ($user as $user_res){
                    $email_detail='Hello '.$user_res->user_name ;
                    $email_detail=$email_detail.'You Reserve Get Accept hall Message';
                    $email_detail=$email_detail.'
'.$email_detail.$user_res->userPaymentAccount ;
                    $this->email->to($user_res->user_email);
                }
                $email_detail=$email_detail.$item->approvment_message;
                $email_detail=$email_detail.$item->reservetion_time;
                $services=$this->reservations->getServicesByReserveId($reserve_id);
                foreach ($services as $service){
                    $email_detail=$email_detail."\nservice_type".$service->service_type."\nres_detailes".$service->res_detailes."\nservice_price".$service->service_price;
                }
            }
            $this->email->subject('You Reserve Get Approved Resturant');
            $this->email->message($email_detail);
            $this->email->send();
        }
    }

    public function hall_approve_denied(){
        $this->load->model('reservations');
        $approvment_message=$this->input->post('approvment_message');
        $hall_id=$this->input->post('hall_id');
        $reserve_id=$this->input->post('reserve_id');
        if($this->reservations->denied_hall($hall_id,$reserve_id,$approvment_message)) {
            $this->load->library('email');
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');
            $reservation=$this->reservations->getReserveHall($reserve_id);
            foreach ($reservation as $item) {
                $user=$this->reservations->getUserByReerveIdHall($reserve_id);
                foreach ($user as $user_res){
                    $email_detail='Hello '.$user_res->user_name ;
                    $email_detail=$email_detail.'You Reserve Get Denied hall Message';
                    $email_detail=$email_detail."\n".$email_detail.$user_res->userPaymentAccount ;
                    $this->email->to($user_res->user_email);
                }
                $email_detail=$email_detail.$item->approvment_message;
                $email_detail=$email_detail.$item->reservetion_time;
                $services=$this->reservations->getServicesByReserveId($reserve_id);
                foreach ($services as $service){
                    $email_detail=$email_detail."\nservice_type".$service->service_type."\nres_detailes".$service->res_detailes."\nservice_price".$service->service_price;
                }
            }
            $this->email->subject('You Reserve Get Denied Resturant');
            $this->email->message($email_detail);
            $this->email->send();
        }
    }

    public function salon(){
        $this->load->model('providers');
        $restaurant_id=$this->providers->getSalonId( $this->session->userdata('email'));
        $data['req']=$this->providers->getSalonReq($restaurant_id);
        $data['res']=$this->providers->getSalonRec($restaurant_id);
        $data['id']=$restaurant_id;
        $this->load->view('salon_provider',$data);
    }

    public function salon_approve_accept(){
        $this->load->model('reservations');
        $approvment_message=$this->input->post('approvment_message');
        $salon_id=$this->input->post('salon_id');
        $reserve_id=$this->input->post('reserve_id');

        if($this->reservations->accept_salon($salon_id,$reserve_id,$approvment_message)) {
            $this->load->library('email');
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');
            $this->load->model('providers');
            $reservation=$this->reservations->getReserveSalon($reserve_id);
            $email_detail='';
            foreach ($reservation as $item) {
                $user=$this->reservations->getUserByReerveIdSalon($reserve_id);
                foreach ($user as $user_res){
                    $email_detail='Hello '.$user_res->user_name ;
                    $email_detail=$email_detail.'
'.$email_detail.$user_res->userPaymentAccount ;
                    $this->email->to($user_res->user_email);
                }
                $email_detail=$email_detail."\napprovment_message".$item->approvment_message;
                $email_detail=$email_detail."\nreserve_time".$item->reserve_time;
                $services=$this->providers->getSalonServices($reserve_id);
                foreach ($services as $service) {
                    $email_detail=$email_detail."\nservice_type". $service->service_type;
                    $email_detail=$email_detail."\nres_detailes". $service->res_detailes;
                    $email_detail=$email_detail."\nservice_price". $service->service_price;

                }
            }
            $this->email->subject('You Reserve Get Approved Salon');
            $this->email->message($email_detail);
            $this->email->send();
        }

    }

    public function salon_approve_denied(){
        $this->load->model('reservations');
        $approvment_message=$this->input->post('approvment_message');
        $salon_id=$this->input->post('salon_id');
        $reserve_id=$this->input->post('reserve_id');

        if($this->reservations->denied_salon($salon_id,$reserve_id,$approvment_message)) {
            $this->load->library('email');
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');
            $this->load->model('providers');
            $reservation=$this->reservations->getReserveSalon($reserve_id);
            $email_detail='';
            foreach ($reservation as $item) {
                $user=$this->reservations->getUserByReerveIdSalon($reserve_id);
                foreach ($user as $user_res){
                    $email_detail='Hello '.$user_res->user_name ;
                    $email_detail=$email_detail.'
'.$email_detail.$user_res->userPaymentAccount ;
                    $this->email->to($user_res->user_email);
                }
                $email_detail=$email_detail."\napprovment_message".$item->approvment_message;
                $email_detail=$email_detail."\nreserve_time".$item->reserve_time;
                $services=$this->providers->getSalonServices($reserve_id);
                foreach ($services as $service) {
                    $email_detail=$email_detail."\nservice_type". $service->service_type;
                    $email_detail=$email_detail."\nres_detailes". $service->res_detailes;
                    $email_detail=$email_detail."\nservice_price". $service->service_price;

                }
            }
            $this->email->subject('You Reserve Get Denied Salon');
            $this->email->message($email_detail);
            $this->email->send();
        }
    }
}
