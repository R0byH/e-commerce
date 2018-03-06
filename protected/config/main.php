<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'e-commerce',
        'theme'=>'blackboot',//'blackboot',//'rhea',//'tutorialzine1',//abound',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*',
                'bootstrap.helpers.TbHtml',
                'bootstrap.helpers.*',
                'bootstrap.helpers.TbArray',
                'bootstrap.behaviors.TbWidget',
                'bootstrap.widgets.*',
                'bootstrap.components.*',
	),

        'language'=>'es', // Este es el lenguaje en el que querés que muestre las cosas
        'sourceLanguage'=>'es',
        'aliases' => array(
                'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'),
            ),
	'modules'=>array(
			
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'pass',
			
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array('bootstrap.gii'),//bootstrap.gii'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
                'utiles'=>array(
                        'class'=>'application.components.utiles',
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
		/*'db'=>array(
			/*'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
                'authManager'=>array(
                             'class'=>'CDbAuthManager',
                             'connectionID'=>'db',
                             'itemTable'=>'AuthItem', // Tabla que contiene los elementos de autorizacion
                             'itemChildTable'=>'AuthItemChild', // Tabla que contiene los elementos padre-hijo
                             'assignmentTable'=>'AuthAssignment', // Tabla que contiene la signacion usuario-autorizacion
                ),
            
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cupones',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
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
            'bootstrap' => array(
           'class' => 'bootstrap.components.BsApi',//TbApi   
        ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);