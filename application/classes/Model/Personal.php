<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Personal extends ORM
{
        protected $_table_name = 'personal_information';
        protected $_belongs_to = array('candidates' => array() );

        public function rules()
        {
	        return array(
	                       'gender' => array(
	                                             array('not_empty'),
	                                             array('min_length', array(':value', 1)),
	                                             array('max_length', array(':value', 45)),
	                                     ),
	                       'birth_date' => array(
	                                              array('not_empty'),
	                                              array('min_length', array(':value',1)),
	                                              //array('max_length',array(':value',128)),
	                                      ),
	                       'birth_state' => array(
	                                              array('not_empty'),
	                                              array('min_length', array(':value',1)),
	                                              //array('max_length',array(':value',128)),
	                                      ),
	                       'party' => array(
	                                            array('not_empty'),
	                                            array('min_length', array(':value', 1)),
	                                            array('max_length', array(':value', 128)),
	                                    ),
	               );
        }
}
