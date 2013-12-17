<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_viewsType  extends ORM
{
        protected $_table_name = 'viewsType';
        protected $_belongs_to = array('Views' => array() );

        // protected $_has_many = array('Views' => array('model' => 'Views', 'foreign_key' => 'views_type_id'));
        

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
