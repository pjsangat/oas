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
		'name'      => lang('home'),
		'url'       => site_url(),
		'icon'      => 'fa fa-home'
	),

	'logout' => array(
		'name'      => lang('logout'),
		'url'       => site_url('account/logout'),
		'icon'      => 'fa fa-sign-out',
	),
	
);