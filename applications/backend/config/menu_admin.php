<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Menu
| -------------------------------------------------------------------------
| This file lets you define navigation menu items on sidebar.
|
*/

$config['menu'] = array(

	'home' => array(
		'name'      => 'Home',
		'url'       => site_url(),
		'icon'      => 'fa fa-home'
	),

//	'user' => array(
//		'name'      => 'Users',
//		'url'       => site_url('user'),
//		'icon'      => 'fa fa-users'
//	),

	// Example to add sections with subpages
    
    
	'features' => array(
		'name'      => 'Features',
		'url'       => site_url('features'),
		'icon'      => 'fa fa-cog',
		'children'  => array(
			'Classrooms'		=> site_url('features/classroom'),
			'Furnitures'		=> site_url('features/furnitures'),
			'Facilities'		=> site_url('features/facilities'),
			'Buildings'		=> site_url('features/buildings'),
			'Equipments'		=> site_url('features/equipments'),
			'Directories'		=> site_url('features/directories'),
//			'Demo 3'		=> site_url('example/demo/3'),
		)
	),
	// end of example
    
	'about' => array(
		'name'      => 'About',
		'url'       => site_url('about'),
		'icon'      => 'fa fa-cog',
		'children'  => array(
			'Mission'		=> site_url('about/mission'),
			'Vision'		=> site_url('about/vision'),
//			'Demo 3'		=> site_url('example/demo/3'),
		)
	),
	'admin' => array(
		'name'      => 'Administration',
		'url'       => site_url('admin'),
		'icon'      => 'fa fa-cog',
		'children'  => array(
			'Backend Users'		=> site_url('admin/backend_user'),
			'Users'		=> site_url('admin/user'),
		)
	),

	'logout' => array(
		'name'      => 'Sign out',
		'url'       => site_url('account/logout'),
		'icon'      => 'fa fa-sign-out'
	),
);