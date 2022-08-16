<?php
class Halls extends CI_Controller {

    public function index(){
        $this->page();
    }

    public function page($page=1){
        $this->load->model('hall');
        $halls=$this->hall->getAll($page);
        foreach ($halls as $hall){
            $hall->image=$this->hall->getFirstImgById($hall->hall_id);
        }
        $data['halls']=$halls;
        $data['halls_count']=$this->hall->getCount();
        $this->load->view('hall',$data);
    }
    public function open($id){
        $this->load->model('hall');
        $data['id']=$id;
        $data['hall']=$this->hall->getbyi($id);
        $data['hall_images']=$this->hall->getAllImgById($id);
        $data['services']=$this->hall->getServicesByHallId($id);
        $this->load->view('hall_view',$data);
    }

    public function search()
    {
        $keyword = $this->input->get('keyword');
        if ($keyword == null){
            redirect(base_url('halls'));
        }else{
            $this->load->model('hall');
            $halls=$this->hall->search($keyword);
            foreach ($halls as $hall){
                $hall->image=$this->hall->getFirstImgById($hall->hall_id);
            }
            $data['halls']=$halls;
            $data['halls_count']=$this->hall->searchCount($keyword);
            $this->load->view('hall',$data);
        }

    }

    public function reserve()
    {
        if($this->session->has_userdata('user_email')){
            $id = $this->input->post('hall_id');
            $this->load->library('email');
            $reservetion_time=$this->input->post('reservetion_time');
            $this->load->model('reservations');
            $this->load->model('hall');
            $halls=$this->hall->getbyi($id);
            $email_detail = 'We Need To Get Reserve To';
            $total=0;
            foreach ($halls as $hall){
                $email_detail=$email_detail.`hall_id<br/>`.$hall->hall_id. `hall_name<br/>`.$hall->hall_name. `hall_location<br>`.$hall->hall_location. `hall_mobile<br>`.$hall->hall_mobile. `hall_phone<br>`.$hall->hall_phone.`hall_price<br>`.$hall->hall_price. `maxGuestNum<br>`.$hall->maxGuestNum. `hall_email<br>`.$hall->hall_email. `hall_shape<br>`.$hall->hall_shape;
                $total=$hall->hall_price;
                $this->email->to($hall->hall_email);
            }
            $reseve_id=$this->reservations->addReserveHall(intval($id),$this->session->userdata('user_email'),$reservetion_time);
            foreach($_POST['service'] as $service_id) {
                $service=$this->reservations->checkHallService($id,$service_id);
                if($service!=null) {
                    $this->reservations->addReserveHallService($reseve_id, $service_id);
                    $email_detail = $email_detail . '
 service_type :' . $service->service_type . '
 res_detailes :' . $service->res_detailes . '
 service_price :' . $service->service_price;
                    $total=$total+$service->service_price;
                }
            }
            $email_detail=$email_detail.'Please visit us to conform the order '.base_url('provider');
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');
            $this->email->subject('Approvment Reuired');
            $this->email->message($email_detail);
            $this->email->send();
        }else{
            redirect(base_url('login'));
        }
    }

}