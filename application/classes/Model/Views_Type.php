<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Views_Type extends ORM
{
        protected $_table_name = 'views_type';
        protected $_belongs_to = array('Views' => array() );
        
        public function rules()
        {
	        return array(
	                       'name' => array(
	                                             array('not_empty'),
	                                             array('min_length', array(':value', 1)),
	                                             array('max_length', array(':value', 45)),
	                                     ),
	               );
        }
}
