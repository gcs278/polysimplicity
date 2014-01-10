<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Candidates extends ORM
{
        protected $_table_name = 'candidates';
        // The tables related to Candidates
        protected $_has_one = array(
        		'Personal' => array('model' => 'Personal', 'foreign_key' => 'candidates_id'),
        		'Positions' => array('model' => 'Positions', 'foreign_key' => 'candidates_id'),
        		'Views' => array('model' => 'Views', 'foreign_key' => 'views_id')
        	);
        protected $_has_many = array(
        		'Edits' => array('model' => 'Edits','foreign_key' => 'candidates_id'),
        		'Views' => array('model' => "Views','foreign_key' => 'candidates_id")
        	);
        public function rules()
        {
	        return array(
	                       'first_name' => array(
	                                             array('not_empty'),
	                                             array('min_length', array(':value', 1)),
	                                             array('max_length', array(':value', 128)),
	                                     ),
	                       'middle_name' => array(
	                       						  array('not_empty'),
	                                              array('min_length', array(':value',1)),
	                                              array('max_length',array(':value',128)),
	                                      ),
	                       'last_name' => array(
	                                            array('not_empty'),
	                                            array('min_length', array(':value', 1)),
	                                            array('max_length', array(':value', 128)),
	                                    ),
	               );
        }

        public function get_all_candidates() {
	        $sql = 'SELECT `first_name` FROM `candidates` ORDER BY `id`';
	        return DB::select('first_name')->from('candidates')->execute();
        }
}
