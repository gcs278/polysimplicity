<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Edits extends ORM
{
<<<<<<< HEAD
        protected $_table_name = 'edits';
=======
        protected $_table_name = 'Edits';
        protected $_primary_key = 'idedits';
>>>>>>> master
        // The tables related to Candidates
        protected $_has_one = array(
    		'Users' => array('model' => 'Users', 'foreign_key' => 'id'),
    	);
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
