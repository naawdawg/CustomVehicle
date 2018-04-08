<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of App
 *
 * @author andraavram
 */
class App {
    //put your code here
    
        private $mappings = [
		'cost' => 'A1',
                'popularity'=> 'A2',
                'quality'=>'A3'
                
	];
        
        public function mapping($which = null)
	{
		return isset($which) ? $this->mappings[$which] : $this->mappings;
	}
	
}
