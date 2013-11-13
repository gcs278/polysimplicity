<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Edits extends ORM
{
        protected $_table_name = 'Edits';
        // The tables related to Candidates
        protected $_belongs_to = array('Candidates' => array(), 'Users' => array() );
        
        public function rules()
        {
	        return array(
	                       'candidates_id' => array(
	                                             array('not_empty'),
	                                     ),
	                       'users_id' => array(
	                                              array('not_empty'),
	                                      ),
	               );
        }
}
