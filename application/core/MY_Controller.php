<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author        JLP
 * @copyright           2010-2016, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller
{

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */

    public function __construct()
    {
        parent::__construct();
        $this->output->delete_cache();
        //  Set basic view parameters
        $this->data = array();
        $this->data['pagetitle']  = 'CodeIgniter3.1 Starter 2';
        $this->data['ci_version'] = (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '';
    }

    /**
     * Render this page
     */
    public function render($template = 'template')
    {
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->parser->parse($template, $this->data);
    }
    public function render2($template = 'template')
    {
        $this->data['menubar'] = $this->parser->parse('_menubar', $this->config->item('menu_choices'), true);
        $this->parser->parse('tem2', $this->data);
    }

//        function show($key) {
    //            $this->data['pagebody'] = 'load_photo';
    //
    //            // build the list of authors, to pass on to our view
    //            $source = $this->quotes->get($key);
    //
    //            // pass on the data to present, adding the author record's fields
    //            $this->data = array_merge($this->data, (array) $source);
    //
    //            $this->render();
    //        }

}
