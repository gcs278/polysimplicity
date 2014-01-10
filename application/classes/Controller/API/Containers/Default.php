<?php

defined('SYSPATH') or die('No direct script access.');


class Controller_API_Containers_Default extends Controller_Template {

  
    public $template = 'containers/blank';

    
    public $view;

    /**
     * @see system/classes/kohana/controller/Kohana_Controller_Template::before()
     */
    public function before() {
        
            
        
        //Required because we are extending Controller_Template
        parent::before();

        if ($this->auto_render) {
            //Sets the "Default" title set on the container
            
            $this->template->title = '*Developing';
            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array();
        }

        //Cleans the view so that every action can set it
        //by itself without problems
        $this->view = NULL;
        
    }

    /**
     * @see system/classes/kohana/controller/Kohana_Controller_Template::after()
     */
    public function after() {
        if ($this->auto_render) {
            $action = $this->request->action();
            $controller = $this->request->controller();

            //If $this->view is set display it on the
            //containers $content
            $this->template->content = $this->view;
        }

        //Required because we are extending Controller_Template
        parent::after();
    }

}
