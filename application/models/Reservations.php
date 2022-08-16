<?php
/**
 * Created by PhpStorm.
 * User: rawan
 * Date: 2/19/2019
 * Time: 2:32 PM
 */

class Reservations extends CI_Model{

    public function addReserveRest($res_id,$user_eamil,$location,$date){
        $this->db->where('user_email', $user_eamil);
        foreach ($this->db->get('user')->result() as $user){

            $data = array(
                'res_id' => $res_id,
                'user_id' => $user->user_id,
                'location' => $location,
                'date' => $date,
                'approvment' => 0,
                'approvment_message' => 'Not Approved Yet'
            );
            $this->db->insert('reservetion_restaurant', $data);
            return $this->db->insert_id();
        }
    }

    public function addReserveSalon($salon_id,$user_eamil,$date){
        $this->db->where('user_email', $user_eamil);
        foreach ($this->db->get('user')->result() as $user){
            $data = array(
                'sallon_id' => $salon_id,
                'user_id' => $user->user_id,
                'reserve_time' => $date,
                'approvment' => 0,
                'approvment_message' => 'Not Approved Yet'
            );
            $this->db->insert('reserve_salon', $data);
            return $this->db->insert_id();
        }
    }

    public function addReserveHall($hall_id,$user_eamil,$date){
        $this->db->where('user_email', $user_eamil);
        foreach ($this->db->get('user')->result() as $user){
            $data = array(
                'hall_id' => $hall_id,
                'user_id' => $user->user_id,
                'reservetion_time' => $date,
                'approvment' => 0,
                'approvment_message' => 'Not Approved Yet'
            );
            $this->db->insert('reservetion_hall', $data);
            return $this->db->insert_id();
        }
    }

    public function addReserveSalonService($service_id,$reserve_id){
        $data = array(
            'reserveSalon_id' => $reserve_id,
            'services_id' => $service_id
        );
        $this->db->insert('reserve_sallonservice', $data);
    }

    public function addReserveHallService($reserve_id,$service_id){
        $data = array(
            'reservetion_id' => $reserve_id,
            'service_id' => $service_id
        );
        $this->db->insert('reservetion_hall_service', $data);
    }

    public function accept_hall($hall_id,$reserve_id,$approvment_message){
        $this->db->set('approvment_message', $approvment_message);
        $this->db->set('approvment', 1);
        $this->db->where('hall_id', $hall_id);
        $this->db->where('reservetion_id', $reserve_id);
        return $this->db->update('reservetion_hall');
    }

    public function denied_hall($hall_id,$reserve_id,$approvment_message){
        $this->db->set('approvment_message', $approvment_message);
        $this->db->set('approvment', 1);
        $this->db->where('hall_id', $hall_id);
        $this->db->where('reservetion_id', $reserve_id);
        return $this->db->update('reservetion_hall');
    }

    public function checkHallService($hall_id,$service_id){
        $this->db->where('service_id',$service_id);
        $this->db->where('hall_id',$hall_id);
        foreach ($this->db->get('halls_service')->result() as $service){
            return $service;
        }
        return null;
    }

    public function addMeal($reseve_id,$meal_id,$quantity){
        $data = array(
            'reserv_id' => $reseve_id,
            'meal_id' => $meal_id,
            'quantity' => $quantity
        );
        $this->db->insert('reservetion_meals', $data);
    }

    public function accept_restaurant($restaurant_id,$reserve_id,$approvment_message){
        $this->db->set('approvment_message', $approvment_message);
        $this->db->set('approvment', 1);
        $this->db->where('res_id', $restaurant_id);
        $this->db->where('reserv_id', $reserve_id);
        return $this->db->update('reservetion_restaurant');
    }

    public function denied_restaurant($restaurant_id,$reserve_id,$approvment_message){
        $this->db->set('approvment_message', $approvment_message);
        $this->db->set('approvment', 2);
        $this->db->where('res_id', $restaurant_id);
        $this->db->where('reserv_id', $reserve_id);
        return $this->db->update('reservetion_restaurant');
    }


    public function getReserveResturant($reserve_id){
        $this->db->where('reserv_id', $reserve_id);
        return $this->db->get('reservetion_restaurant')->result();
    }
    public function getMealsbyi($id){
        $this->db->where('reserv_id', $id);
        $data=$this->db->get('reservetion_meals')->result();
        return $data;
    }

    public function getUserByReerveIdRestaurant($reserve_id){
        $this->db->where('reserv_id', $reserve_id);
        foreach ($this->db->get('reservetion_restaurant')->result() as $item) {
            $user_id=$item->user_id;
            $this->db->where('user_id',$user_id);
            return $this->db->get('user')->result();
        };
    }

    public function getUserByReerveIdHall($reserve_id){
        $this->db->where('reservetion_id', $reserve_id);
        foreach ($this->db->get('reservetion_hall')->result() as $item) {
            $user_id=$item->user_id;
            $this->db->where('user_id',$user_id);
            return $this->db->get('user')->result();
        }
    }

    public function getUserByReerveIdSalon($reserve_id){
        $this->db->where('reser_id', $reserve_id);
        foreach ($this->db->get('reserve_salon')->result() as $item) {
            $user_id=$item->user_id;
            $this->db->where('user_id',$user_id);
            return $this->db->get('user')->result();
        };
    }

    public function getReserveHall($reserve_id){
        $this->db->where('reservetion_id', $reserve_id);
        return $this->db->get('reservetion_hall')->result();
    }

    public function accept_salon($restaurant_id,$reserve_id,$approvment_message){
        $this->db->set('approvment_message', $approvment_message);
        $this->db->set('approvment', 1);
        $this->db->where('sallon_id', $restaurant_id);
        $this->db->where('reser_id', $reserve_id);
        return $this->db->update('reserve_salon');
    }

    public function denied_salon($restaurant_id,$reserve_id,$approvment_message){
        $this->db->set('approvment_message', $approvment_message);
        $this->db->set('approvment', 2);
        $this->db->where('sallon_id', $restaurant_id);
        $this->db->where('reser_id', $reserve_id);
        return $this->db->update('reserve_salon');
    }

    public function getReserveSalon($reserve_id){
        $this->db->where('reser_id', $reserve_id);
        return $this->db->get('reserve_salon')->result();
    }

    public function getServicesByReserveId($reserve_id){
        $this->db->where('reservetion_id', $reserve_id);
        $services=$this->db->get('reservetion_hall_service')->result();
        foreach ($services as $service){
            $service_id=$service->service_id;
            $this->db->where('service_id', $service_id);
            $serv=$this->db->get('halls_service')->result();
            foreach ($serv as $item){
                $service->service_type=$item->service_type;
                $service->res_detailes=$item->res_detailes;
                $service->service_price=$item->service_price;
            }
        }
        return $services;
    }
}
