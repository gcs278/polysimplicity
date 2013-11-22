<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Views extends ORM
{
        protected $_table_name = 'views';
        protected $_belongs_to = array('candidates' => array() );

        // Views_type_id tells what view is being described here
        protected $_has_one = array('Views_Type' => array('model' => 'Views_Type', 'foreign_key' => 'views_type_id'));
        
        public function rules()
        {
	        return array(
	                       'simple' => array(
	                                             array('not_empty'),
	                                             array('min_length', array(':value', 1)),
	                                             array('max_length', array(':value', 60)),
	                                     ),
	                       'detail' => array(
	                                              array('min_length', array(':value',1)),
	                                              //array('max_length',array(':value',128)),
	                                      ),
	                       'link' => array(
	                                              array('min_length', array(':value',1)),
	                                              // Needs to be more than 45
	                                              array('max_length',array(':value',45)),
	                                      ),
	               );
        }
}
