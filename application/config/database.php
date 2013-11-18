
<?php defined('SYSPATH') or die('No direct access allowed.');
 
return array
(
 'default' => array
 (
  'type'       => 'MySQL',
  'connection' => array(
 
   'hostname'   => 'candidates.politicalsimplicity.com',
   'database'   => 'politicalsimplicity_candidates',
/* 
//Server Credentials
	'database'   => '',
	'username'   => '',
	'password'   => '',
*/

//Localhost Credentials 
   'username'   => 'gcs278',
   'password'   => '',
   'persistent' => FALSE,

  ),
  'table_prefix' => '', 
  'charset'      => 'utf8',
  'caching'      => FALSE,
  'profiling'    => TRUE,
 )
);


?>
