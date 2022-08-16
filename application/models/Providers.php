<?php

class Providers extends CI_Model{
    public function checkHall($email,$pass){
        $this->db->where('hall_email', $email);
        $this->db->where('password', $pass);
        foreach ($this->db->get('halls')->result() as $hall){
            return $hall;
        }
        return null;
    }

    public function checkRest($email,$pass){
        $this->db->where('res_email', $email);
        $this->db->where('password', $pass);
        foreach ($this->db->get('restaurant')->result() as $restaurant){
            return $restaurant;
        }
        return null;
    }

    public function checkSalon($email,$pass){
        $this->db->where('salon_email', $email);
        $this->db->where('password', $pass);
        foreach ($this->db->get('salons')->result() as $salon)
            return $salon;
        return null;
    }

    public function getHallRec($hall_id){
        $this->db->where('hall_id',$hall_id);
        $this->db->where('approvment',1);
        $this->db->where('reservetion_time >', date("Y-m-d h:i:sa"));
        return $this->db->get('reservetion_hall')->result();
    }

    public function getHallReq($hall_id){
        $this->db->where('hall_id',$hall_id);
        $this->db->where('approvment',0);
        $this->db->where('reservetion_time >', date("Y-m-d h:i:sa"));
        $req=$this->db->get('reservetion_hall')->result();
        foreach ($req as $reservetion){

            $this->db->where('reservetion_id', intval($reservetion->reservetion_id));
            $reservetion->services = array();
            foreach ($this->db->get('reservetion_hall_service')->result() as $meal){
                $this->db->where('service_id',$meal->service_id);
                foreach ($this->db->get('halls_service')->result() as $value){

                    array_push($reservetion->services,$value);
                }
            }


        }
        return  $req;
    }

    public function getHallId($email){
        $this->db->where('hall_email',$email);
        foreach ($this->db->get( 'halls')->result() as $item) {
            return $item->hall_id;
        }
    }

    public function getRestaurantRec($res_id){
        $this->db->where('res_id',$res_id);
        $this->db->where('approvment',1);
        $this->db->where('date >', date("Y-m-d h:i:sa"));
        $rec= $this->db->get('reservetion_restaurant')->result();
        foreach ($rec as $item){
            $this->db->where('reserv_id', intval($item->reserv_id));
            $item->meals = array();
            foreach ($this->db->get('reservetion_meals')->result() as $meal){
                $this->db->where('meal_id',$meal->meal_id);
                foreach ($this->db->get('meals')->result() as $value){
                    $value->qantity=$meal->quantity;
                    array_push($item->meals,$value);
                }
            }
        }
        return $rec;
    }

    public function getRestaurantReq($res_id){
        $this->db->where('res_id',$res_id);
        $this->db->where('approvment',0);
        $this->db->where('date >', date("Y-m-d h:i:sa"));
        $req =$this->db->get('reservetion_restaurant')->result();
        foreach ($req as $item){
            $this->db->where('reserv_id', intval($item->reserv_id));
            $item->meals = array();
            foreach ($this->db->get('reservetion_meals')->result() as $meal){
                $this->db->where('meal_id',$meal->meal_id);
                foreach ($this->db->get('meals')->result() as $value){
                    $value->qantity=$meal->quantity;
                    array_push($item->meals,$value);
                }
            }
        }
        return $req;
    }

    public function getRestaurantId($email){
        $this->db->where('res_email',$email);
        foreach ($this->db->get( 'restaurant')->result() as $item) {
            return $item->res_id;
        }
    }

    public function getSalonRec($salon_id){
        $this->db->where('sallon_id',$salon_id);
        $this->db->where('approvment',0);
        $this->db->where('reserve_time >', date("Y-m-d h:i:sa"));
        $rec =$this->db->get('reserve_salon')->result();
        foreach ($rec as $item){
            $this->db->where('reserveSalon_id', $item->reser_id);
            $item->services =$this->db->get('reserve_sallonservice')->result();
            foreach ($item->services as $service){
                $this->db->where('service_id', $service->services_id);
                foreach ($this->db->get('services_salons')->result() as $value){
                    $service->service_type=$value->service_type;
                    $service->res_detailes=$value->res_detailes;
                    $service->service_price=$value->service_price;
                }
            }
        }
        return $rec;
    }

    public function getSalonReq($salon_id){
        $this->db->where('sallon_id',$salon_id);
        $this->db->where('approvment',0);
        $this->db->where('reserve_time >', date("Y-m-d h:i:sa"));
        $req =$this->db->get('reserve_salon')->result();
        foreach ($req as $item){
            $this->db->where('reserveSalon_id', $item->reser_id);
            $item->services =$this->db->get('reserve_sallonservice')->result();
            foreach ($item->services as $service){
                $this->db->where('service_id', $service->services_id);
                foreach ($this->db->get('services_salons')->result() as $value){
                    $service->service_type=$value->service_type;
                    $service->res_detailes=$value->res_detailes;
                    $service->service_price=$value->service_price;
                }
            }
        }
        return $req;
    }

    public function getSalonId($email){
        $this->db->where('salon_email',$email);
        foreach ($this->db->get( 'salons')->result() as $item) {
            return $item->salon_id;
        }
    }

    public function getSalonServices($reserv_id){
        $this->db->where('reserveSalon_id',$reserv_id);
        $services =$this->db->get('reserve_sallonservice')->result();
        foreach ($services as $service){
            $this->db->where('service_id', $service->services_id);
            foreach ($this->db->get('services_salons')->result() as $value){
                $service->service_type=$value->service_type;
                $service->res_detailes=$value->res_detailes;
                $service->service_price=$value->service_price;
            }
        }
        return $services;
    }
}
