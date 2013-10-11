<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Political Simplicity Development Gateway',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.states.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'PoliticalSimplicity',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1','24.131.5.128'),
		),
		
	),

	// application components
	'components'=>array(
		// Authentication, by default, authenticated or guest
		'authManager'=>array(
        	   'class'=>'CDbAuthManager',
         	   'defaultRoles'=>array('authenticated', 'guest'),
        	),
		'bootstrap'=>array(
            		'class'=>'bootstrap.components.Bootstrap',
        	),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/

		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=candidates.politicalsimplicity.com;dbname=politicalsimplicity_candidates',
			'emulatePrepare' => true,
			'username' => 'gcs278',
			'password' => 'PoliticalSimplicity',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'support@politicalsimplicity.com',
	),
	'theme'=>'bootstrap', // requires you to copy the theme under your themes directory
    	'modules'=>array(
        'gii'=>array(
        'generatorPaths'=>array(
                'bootstrap.gii',
            ),
        ),
    ),	
	
);
