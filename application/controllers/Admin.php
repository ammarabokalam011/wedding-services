<?php
/**
 * Created by PhpStorm.
 * User: rawan
 * Date: 2/17/2019
 * Time: 2:27 PM
 */

class Admin extends CI_Controller{


    public function index()
    {
        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }

    public  function halls(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('halls');
        $output = $crud->render();
        $this->_example_output($output);
    }



    public  function avilable_restaurant(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('avilable_restaurant');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function gagainst_group(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('gagainst_group');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function guest_against(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('guest_against');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function guest_with(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('guest_with');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function guests(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('guests');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function gwith_group(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('gwith_group');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public  function halls_components(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('halls_components');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function halls_photo(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('halls_photo');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function meals(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('meals');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public  function reservetion(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('reservetion');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function reserve_sallonservice(){

        $crud=new Grocery_CRUD();
        $crud->set_table('reserve_sallonservice');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function reservetion_meals(){

        $crud=new Grocery_CRUD();
        $crud->set_table('reservetion_meals');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function restaurant(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('restaurant');
        $output = $crud->render();
        $this->_example_output($output);
    }


    public  function restaurant_photo(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('restaurant_photo');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function salons(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('salons');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function salons_photo(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('salons_photo');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public  function services_salons(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('services_salons');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function tables(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('tables');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function user(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('user');
        $output = $crud->render();
        $this->_example_output($output);
    }
    public  function wedding_info(){

        $crud=new Grocery_CRUD();
        ;
        $crud->set_table('wedding_info');
        $output = $crud->render();
        $this->_example_output($output);
    }

    public function _example_output($output = null)
    {
        $this->load->view('example.php',(array)$output);

    }
}
