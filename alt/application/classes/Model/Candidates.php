<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Candidates extends ORM
{
        protected $_table_name = 'candidates';
        // The tables related to Candidates
        protected $_has_one = array(
        		'personal' => array('model' => 'personal_information', 'foreign_key' => 'personal_id'),
        		'positions' => array('model' => 'positions', 'foreign_key' => 'positions_id'),
        		'views' => array('model' => 'views', 'foreign_key' => 'views_id')
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

        public function validate_news($arr) {
	        return Validate::factory($arr)
	               ->filter(TRUE, 'trim')
	               ->rule('title', 'not_empty')
	               ->rule('post', 'not_empty');
        }
        public function add_news($d) {
	        // Create a new user record in the database
	        $insert_id = DB::insert('news_example', array('title','post'))
	                     ->values(array($d['title'],$d['post']))
	                     ->execute();

	        return $insert_id;
        }
}
