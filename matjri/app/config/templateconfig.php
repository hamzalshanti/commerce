<?php

return [

	'template'     => [

		'header'      => TEMPLATE_PATH . 'header.php',
		'main-start'  => TEMPLATE_PATH . 'mainstart.php',
		':view'		  => 'gen',
		'main-end'	  => TEMPLATE_PATH . 'mainend.php'
	],

	'header_links' => [

		'CSS' => [

		'fontasewome'      => CSS . 'all.min.css',
		'bootstrap'		   => CSS . 'bootstrap.min.css',
		'style'            => CSS . 'style.css',
		'table'            => CSS . 'jquery.dataTables.min.css',
		'ar'			   => CSS . 'ar.css'

 		]

	],

	'footer_links' => [

		'JS' => [

		'JQuery'            => JS . 'jquery-3.4.1.min.js',
		'popper'            => JS . 'popper.min.js',
		'bootstrap'		   	=> JS . 'bootstrap.min.js',
		'table'            	=> JS . 'jquery.dataTables.js',
		'script'            => JS . 'script.js'

		]

	],	


];