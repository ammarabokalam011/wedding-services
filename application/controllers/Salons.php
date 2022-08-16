<?php

class Salons extends CI_Controller
{
    public function index(){
        $this->page();
    }

    public function page($page=1){
        $this->load->model('salon');
        $salons=$this->salon->getAll($page);
        foreach ($salons as $salon){
            $salon->image=$this->salon->getFirstImgById($salon->salon_id);
        }
        $data['salons']=$salons;
        $data['salons_count']=$this->salon->getCount();

        $this->load->view('salon',$data);
    }

    public function open($id=1){
        $this->load->model('salon');
        $data['salons']=$this->salon->getbyi($id);
        $data['salons_images']=$this->salon->getAllImgById($id);
        $data['services']=$this->salon->getServicesById($id);
        $this->load->view('salon_view',$data);
    }

    public function search()
    {
        $keyword = $this->input->get('keyword');
        echo $keyword;
        if ($keyword == null){
            redirect(base_url('salons'));
        }else{
            $this->load->model('salon');
            $salons=$this->salon->search($keyword);
            foreach ($salons as $salon){
                $salon->image=$this->salon->getFirstImgById($salon->salon_id);
            }
            $data['salons']=$salons;
            $data['salons_count']=$this->salon->searchCount($keyword);
            $this->load->view('salon',$data);
        }

    }

    public function reserve(){
        if($this->session->has_userdata('user_email')){
            $this->load->library('email');
            $services=array();
            foreach($_POST as $key => $value){
                $data[$key] = $this->input->post($key);
                if($key!='salon_id' && $key!='reservetion_time'){
                    array_push($services,substr($key,7));
                }
            }
            $email_detail='We Need To Reserve Your Salon ';
            $id=$data['salon_id'];
            $this->load->model('reservations');
            $this->load->model('salon');
            $reserve_id=$this->reservations->addReserveSalon($id,$this->session->userdata('user_email'),$this->input->post('reservetion_time'));
            foreach ($services as $service){
                $this->reservations->addReserveSalonService(intval($service),intval($reserve_id));
                $serv =$this->salon-> getServicesByIdService($service);
                $email_detail=$email_detail.' Service Type :'.$serv->service_type."/nService Detail :". $serv->res_detailes.'
Service Price'.  $serv->service_price.'
';
            }

            $email_detail = $email_detail . '
             Please visit us to conform the order '.base_url('provider');
            $salon=$this->salon->getbyi($id);
            foreach ($salon as $item){
                $this->email->to($item->salon_email);
            }
            $this->email->from( 'weddingservice@localhost', 'Wedding Site');

            $this->email->subject('Approvment Email');
            $this->email->message($email_detail);
            $this->email->send();
        }else{
            redirect(base_url('login'));
        }
    }

}
