<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category extends Application
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/
     *     - or -
     *         http://example.com/welcome/index
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $result = '';
        $role = $this->session->userdata('userrole');
        $this->data['pagetitle'] = 'Catalogue ('. $role . ')';
        $this->load->library('parser');
        $this->load->model("Accessory_Model");
        $bodyColour = $this->Accessory_Model->some("CategoryId", 1);
        $rim        = $this->Accessory_Model->some("CategoryId", 2);
        $storage    = $this->Accessory_Model->some("CategoryId", 4);
        $spoiler    = $this->Accessory_Model->some("CategoryId", 3);
        $data = [
            "_menubar" => $this->config->item('menu_choices'),
            "bodyColours" => $bodyColour,
            "rims"        => $rim,
            "storages"    => $storage,
            "spoilers"    => $spoiler,
        ];
        if ($role == ROLE_ADMIN)
        {
            $this->render2();
            $result .= $this->parser->parse('category-admin', $data);
        }
        else if ($role == ROLE_USER)
        {
            $this->render2();
            $result .= $this->parser->parse('category', $data);
        }
        else
        {
            $this->render2();
            $result .= $this->parser->parse('category-guest', $data);
        }
        $this->data['pagebody'] = 'CatalogWeb';
       	$this->data['display_tasks'] = $result;
        // and then pass them on
        
        
        //$this->parser->parse('category', $data);
        		//$this->data['category'] = $hello;

        //$this->render2();
        //$this->load->view('category', $data);
    }

}
