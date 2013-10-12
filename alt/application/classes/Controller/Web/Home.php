<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Web_Home extends Controller_Web_Containers_Default {

    public function action_index() {
        $this->template->title = 'Home';
        $view=view::factory('controllers/web/home/index');
        $this->view = $view;
       
    }

}

