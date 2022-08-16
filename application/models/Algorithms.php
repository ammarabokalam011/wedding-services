<?php
/**
 * Created by PhpStorm.
 * User: rawan
 * Date: 2/26/2019
 * Time: 10:02 AM
 */

class Algorithms extends CI_Model{
    public function addGeusts($guestsNames,$geust_age,$relation,$groomOrBride,$priority,$gender,$wedding_id){
        $this->load->model('guest');
        for ($i=0;$i<count($guestsNames);$i++){
            $guest = array(
                'guest_name' => $guestsNames[$i],
                'guest_age' => $geust_age[$i],
                'gender' => $gender[$i],
                'groom_bride' => $groomOrBride[$i],
                'priority' => $priority[$i],
                'relationship' => $relation[$i],
                'wedding_id'=>$wedding_id
            );
            $this->db->insert('guests',$guest);
            $guest=new Guest();
            $guest->setGuestName($guestsNames[$i]);
            $guest->setGuestAge($geust_age[$i]);
            $guest->setGender($gender[$i]);
            $guest->setGroomBride($groomOrBride[$i]);
            $guest->setPriority($priority[$i]);
            $guest->setRelationship($relation[$i]);
        }
    }

    public function addWedding($hall_id,$user_id){
        $guest = array(
            'hall_id' => $hall_id,
            'user_id' => $user_id
        );
        $this->db->insert('wedding_info',$guest);
        return $this->db->insert_id();
    }

    public function getAlgoData($wedding_id){
        $this->db->where('wedding_id',$wedding_id);
        foreach ($this->db->get('wedding_info')->result() as $wedding_info){
            $hall_id=$wedding_info->hall_id;
            $this->db->where('hall_id',$hall_id);
            foreach ($this->db->get('halls')->result() as $hall) {
                $data['hall']=$hall;
                $this->db->where('hall_id',$hall_id);
                $data['component']=array();
                foreach ($this->db->get('halls_components')->result() as $component){
                    array_push($data['component'], $component);
                }
                $this->db->where('hall_id',$hall_id);
                $data['tables']=array();
                foreach ($this->db->get('tables')->result() as $table){
                    array_push($data['tables'], $table);
                }
            }
            return $data;
        }
    }
}