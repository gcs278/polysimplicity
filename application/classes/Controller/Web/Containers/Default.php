<?php

defined('SYSPATH') or die('No direct script access.');


class Controller_Web_Containers_Default extends Controller_Template {

  
    public $template = 'containers/default';

    
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

            //Build the styles array
            $css_file = 'media/css/controllers/web/' . $controller . '/' . $action . '.css';
            $styles = array(
                //'media/css/camera/camera.css'=>'screen',
                //'media/css/ticketer/ticketer-style.css'=>'screen',
                //'media/css/blueprint/screen.css' => 'screen, projection',
                //'media/css/blueprint/src/print.css' => 'print',
                //'media/css/blueprint/src/ie.css' => 'screen, projection',
                //'media/css/jqueryui/jquery-ui-1.9.1.custom.min.css'=>'screen',
                // 'media/css/style.css' => 'screen',
                // GRANT ADDED, I believe there is a better way to do this
                //'media/css/controllers/web/Home/form.css'=>'screen',
                //'media/css/controllers/web/Home/structure.css'=>'screen',
                //'media/css/controllers/web/Home/theme.css'=>'screen',
            );

            //VALIDATING FILE
            if (file_exists($css_file)) {
                $styles = array_merge($styles, array($css_file => 'screen'));
            }

            //Build the scripts array
            $js_file = 'media/js/controllers/web/' . $controller . '/' . $action . '.js';
            $scripts = array('media/js/jquery/jquery-1.8.2.min.js',
                'media/js/jquery/jquery-validation.js',
                'media/js/jqueryui/jquery-ui-1.9.1.custom.min.js',
                'media/js/ticketer/jquery.ticker.js',
                'media/js/camera/camera.js',
            );

            //VALIDATING FILE
            if (file_exists($js_file)) {
                $scripts = array_merge($scripts, array($js_file));
            }

            //Set styles and scripts on the template (container). This can also be
            //done from any action method
            $this->template->styles = array_merge($styles, $this->template->styles);
            $this->template->scripts = array_merge($scripts, $this->template->scripts);

           
            

            //If $this->view is set display it on the
            //containers $content
            $this->template->content = $this->view;
        }

        //Required because we are extending Controller_Template
        parent::after();
    }

}
