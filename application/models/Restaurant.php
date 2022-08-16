<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 2/3/2019
 * Time: 12:20 PM
 */

class Restaurant extends CI_Model {

    public function getAll($page){
        $data=$this->db->get('restaurant',20,$page*20-20);
        $data=$data->result();
        return $data;
    }


    public function getbyi($id){
        $this->db->where('res_id', $id);
        $data=$this->db->get('restaurant')->result();
        return $data;
    }
    public function getMealsbyi($id){
        $this->db->where('res_id', $id);
        $data=$this->db->get('meals')->result();
        return $data;
    }

    public function getMealbyid($id){
        $this->db->where('meal_id', $id);
        $data=$this->db->get('meals')->result();
        return $data;
    }

    public function getCount(){
        $this->db->from('restaurant');
        $num_results = $this->db->count_all_results();
        return $num_results;
    }

    public function search($keyword){
        $this->db->like('res_name',$keyword);
        $query  =   $this->db->get('restaurant');
        return $query->result();
    }

    public function searchCount($keyword){
        $this->db->like('res_name',$keyword);
        $this->db->from('restaurant');
        return $this->db->count_all_results();

    }

}