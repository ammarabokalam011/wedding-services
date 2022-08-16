<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 2/3/2019
 * Time: 12:20 PM
 */

class Salon extends CI_Model {

    public function getAll($page){
        $data=$this->db->get('salons',4,$page*4-4);
        $data=$data->result();
        return $data;
    }

    public function getAllImgById($id){
        $this->db->where('salon_id', $id);
        $data=$this->db->get('salons_photo')->result();
        return $data;
    }

    public function getbyi($id){
        $this->db->where('salon_id', $id);
        $data=$this->db->get('salons')->result();
        return $data;
    }

    public function getCount(){
        $this->db->from('salons');
        $num_results = $this->db->count_all_results();
        return $num_results;
    }

    public function getFirstImgById($id){
        foreach ($this->db->get_where('salons_photo', array('salon_id' => $id), 1, 0)->result() as $ph){
            return $ph->photo_salon_link;
        };
    }

    public function getServicesById($id){
        $this->db->where('salon_id', $id);
        return $this->db->get_where('services_salons')->result() ;
    }

    public function getServicesByIdService($id){
        $this->db->where('service_id', $id);
        foreach ( $this->db->get_where('services_salons')->result() as $item){
            return $item;
        };
    }

    public function search($keyword){
        $this->db->like('salon_name',$keyword);
        $query  =   $this->db->get('salons');
        return $query->result();
    }

    public function searchCount($keyword){
        $this->db->like('salon_name',$keyword);
        $this->db->from('salons');
        return $this->db->count_all_results();
    }
}