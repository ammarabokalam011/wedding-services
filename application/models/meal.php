<?php
/**
 * Created by PhpStorm.
 * User: rawan
 * Date: 2/18/2019
 * Time: 5:09 PM
 */

class meal extends CI_Model
{
    public function getMealById($meal_id,$res_id){
        $this->db->where('res_id', $res_id);
        $this->db->where('meal_id', $meal_id);
        return $this->db->get('meals')->result();
    }
}