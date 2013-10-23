<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Candidates extends Model
{
        /*
               CREATE TABLE `news_example` (
               `id` INT PRIMARY KEY AUTO_INCREMENT,
               `title` VARCHAR(30) NOT NULL,
               `post` TEXT NOT NULL);
             */

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
