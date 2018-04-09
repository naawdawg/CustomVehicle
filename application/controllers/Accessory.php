<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Accessory
 *
 * @author Lucas
 */
class Accessory extends Application {
    //put your code here
           public function index() 
     {
           $this->load->model('Accessory_Model');
           $data = $this->Accessory_Model->all();
        echo("<pre>");
           print_r($data);
           //$this->show('CategoryId');
     }
     
         // initiate editing of a task
    public function edit($AccessoryId = null)
    {
        if ($AccessoryId == null)
            redirect('/Category');
        $accessory = $this->Accessory_Model->get($AccessoryId);
        $this->session->set_userdata('accessory', $accessory);
        $this->showit();
    }    
    // Render the current DTO
    
    private function showit()
    {
        $this->load->helper('form');
        $accessory = $this->session->userdata('accessoryid');
        $this->data['AccessoryId'] = $task->id;
        // if no errors, pass an empty message
        if ( ! isset($this->data['error']))
            $this->data['error'] = '';
        $fields = array(
            'fdescription'      => form_label('Description') . form_input('description', $accessory->description),
            'fcost'  => form_label('Cost') . form_input('cost',  $accessory->cost),
            'zsubmit'    => form_submit('submit', 'Update the Accesory'),
            'fpopularity'      => form_label('Popularity') . form_input('popularity', $accessory->popularity),
            'fquality'      => form_label('Quality') . form_input('quality', $accessory->quality),
            );
        $this->data = array_merge($this->data, $fields);
        $this->data['pagebody'] = 'accessoryedit';
        $this->render();
    }
    // handle form submission
    public function submit()
    {
        // setup for validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules($this->tasks->rules());
        // retrieve & update data transfer buffer
        $task = (array) $this->session->userdata('task');
        $task = array_merge($task, $this->input->post());
        $task = (object) $task;  // convert back to object
        $this->session->set_userdata('task', (object) $task);
        // validate away
        if ($this->form_validation->run())
        {
            if (empty($task->id))
            {
                                $task->id = $this->tasks->highest() + 1;
                $this->tasks->add($task);
                $this->alert('Task ' . $task->id . ' added', 'success');
            } else
            {
                $this->tasks->update($task);
                $this->alert('Task ' . $task->id . ' updated', 'success');
            }
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
        $this->session->unset_userdata('task');
        redirect('/mtce');
    }

    
  
}
