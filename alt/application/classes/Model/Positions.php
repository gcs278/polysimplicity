<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Positions extends ORM
{
        protected $_table_name = 'positions';
        protected $_belongs_to = array('candidates' => array() );

        public function rules()
        {
	        return array(
	                       'title' => array(
	                                             array('not_empty'),
	                                             array('min_length', array(':value', 1)),
	                                             array('max_length', array(':value', 45)),
	                                     ),
	                       'term_state' => array(
	                                              array('not_empty'),
	                                              array('min_length', array(':value',1)),
	                                              //array('max_length',array(':value',128)),
	                                      ),
	                       'term_end' => array(
	                                              array('min_length', array(':value',1)),
	                                              //array('max_length',array(':value',128)),
	                                      ),
	                       'status' => array(
	                                            array('not_empty'),
	                                            array('min_length', array(':value', 1)),
	                                            array('max_length', array(':value', 128)),
	                                    ),
	               );
        }

}
