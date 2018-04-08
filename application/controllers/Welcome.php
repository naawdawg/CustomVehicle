<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->data['pagebody'] = 'index';
            $this->data['top'] = $this->displayCar();
            $role = $this->session->userdata('userrole');
            $this->render('homepage_template'); 
            // if not a valid user to make their own car
            if ($role == ROLE_ADMIN || $role == ROLE_USER)
            {
                $this->displayCarOptions();
            } else
            {
                return;
            }
	}
        
        // displays the car
        function displayCar() {
            return $this->load->view('top', null, true);
        }
        
        // displays the options
        function displayCarOptions() {
            $this->load->library('parser');
            $data = $this->carOptions();
            $this->parser->parse('bottom', $data);
        }
        
        // function to grab data from model
        function carOptions() {
            $this->load->model("Accessory_Model");
            $bodyColour = $this->Accessory_Model->some("CategoryId", 1);
            $rim        = $this->Accessory_Model->some("CategoryId", 2);
            $storage    = $this->Accessory_Model->some("CategoryId", 4);
            $spoiler    = $this->Accessory_Model->some("CategoryId", 3);
            $data = [
                "bodyColours" => $bodyColour,
                "rims"        => $rim,
                "storages"    => $storage,
                "spoilers"    => $spoiler,
            ];
            return $data;
        }
}
