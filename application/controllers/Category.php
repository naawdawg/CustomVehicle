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
        $bodyColours = $this->Accessory_Model->some("CategoryId", 1);
        $rims        = $this->Accessory_Model->some("CategoryId", 2);
        $storages    = $this->Accessory_Model->some("CategoryId", 4);
        $spoilers    = $this->Accessory_Model->some("CategoryId", 3);

        $this->changeMapping($bodyColours);
        $this->changeMapping($rims);
        $this->changeMapping($storages);
        $this->changeMapping($spoilers);
        
        $data = [
            "_menubar" => $this->config->item('menu_choices'),
            "bodyColours" => $bodyColours,
            "rims"        => $rims,
            "storages"    => $storages,
            "spoilers"    => $spoilers,
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
    

    public function changeMapping ($dataArray){
        foreach($dataArray as $dataValue){
            
            $field = $this->app->mapping('cost');
            $dataValue->Cost=$dataValue->$field;
            
            $field = $this->app->mapping('popularity');
            $dataValue->Popularity=$dataValue->$field;
            
            $field = $this->app->mapping('quality');
            $dataValue->Quality=$dataValue->$field;     
        }
        
        return $dataArray;
    }
   
     
    public function edit($AccessoryId = null)
    {
        $this->load->model("Accessory_Model");
        if ($AccessoryId == null)
            redirect('/category');
        $accessory = $this->Accessory_Model->get($AccessoryId);
        echo $accessory->Cost;
        $this->session->set_userdata('accessory', $accessory);
        $this->showit();
    }    
    // Render the current DTO
    
    private function showit()
    {
        $this->load->model("Accessory_Model");
        $this->load->helper('form');
        $accessory = $this->session->userdata('accessory');
        $this->data['accessoryid'] = $accessory->AccessoryId;
        // if no errors, pass an empty message
        if ( ! isset($this->data['error']))
            $this->data['error'] = '';

        $fields = array(
            'fdescription'      => form_label('Description') . form_input('description', $accessory->Description),
            'fcost'             => form_label('Cost') . form_input('cost', $accessory->Cost),
            'fpopularity'       => form_label('Popularity') . form_input('popularity', $accessory->Popularity),
            'fquality'          => form_label('Quality') . form_input('quality', $accessory->Quality),
            'zsubmit'           => form_submit('submit', 'Update the Accesory'),
            );
        
        $this->data = array_merge($this->data, $fields);
        $this->data['pagebody'] = 'accessoryedit';
        $this->render();
    }
//    // handle form submission
    public function submit()
    {
        // setup for validation
        $this->load->model("Accessory_Model");
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->Accessory_Model->rules());
        // retrieve & update data transfer buffer
        $accessory = (array) $this->session->userdata('accessory');
        $accessory = array_merge($accessory, $this->input->post());
        $accessory = (object) $accessory;  // convert back to object
        $this->session->set_userdata('accessory', (object) $accessory);
        // validate away
        if ($this->form_validation->run())
        {

                $this->Accessory_Model->update($accessory);
                $this->alert('Accessory ' . $accessory->AccessoryId . ' updated', 'success');
           
        } else
        {
            $this->alert('<strong>Validation errors!<strong><br>' . validation_errors(), 'danger');
        }
        $this->showit();
    }
    
    // build a suitable error mesage
    private function alert($message) {
        $this->load->helper('html');        
        $this->data['error'] = heading($message,3);
    }
    
    // Forget about this edit
    function cancel() {
        $this->session->unset_userdata('accesory');
        redirect('/category');
    }

    
    
}
