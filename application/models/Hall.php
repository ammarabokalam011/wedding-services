<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 2/3/2019
 * Time: 12:20 PM
 */

class Hall extends CI_Model{

    public function getAll($page){
        $data=$this->db->get('halls',20,$page*20-20);
        $data=$data->result();
        return $data;
    }
    public function getAllOfThem(){
        $this->db->order_by('hall_name', 'DESC');
        $data=$this->db->get('halls');

        $data=$data->result();
        return $data;
    }

    public function getAllImgById($id){

        $this->db->where('hall_id', $id);
        $data=$this->db->get('halls_photo')->result();
        return $data;
    }

    public function getbyi($id){
        $this->db->where('hall_id', $id);
        $data=$this->db->get('halls')->result();
        return $data;
    }


    public function getCount(){
        $this->db->from('halls');
        $num_results = $this->db->count_all_results();
        return $num_results;
    }

    public function getFirstImgById($id){
        $this->db->where('hall_id', $id);

        foreach ($this->db->get('halls_photo', 1, 0)->result() as $ph) {
            return $ph->photo_hall_link;
        };
    }

    public function getServicesByHallId($hall_id){
        $this->db->where('hall_id',$hall_id);
        return $this->db->get('halls_service')->result();
    }


    public function search($keyword){
        $this->db->like('hall_name',$keyword);
        $query  =   $this->db->get('halls');
        return $query->result();
    }

    public function searchCount($keyword){
        $this->db->like('hall_name',$keyword);
        $this->db->from('halls');
        return $this->db->count_all_results();
    }

}