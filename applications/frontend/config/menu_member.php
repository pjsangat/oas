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
        'features' => array(
		'name'      => 'Features',
		'url'       => site_url('features'),
		'icon'      => ''
        ),
        'search' => array(
		'name'      => 'Venue And Reservation',
		'url'       => site_url('search'),
		'icon'      => ''
        ),
        'roving_equipment' => array(
		'name'      => 'Roving Equipment',
		'url'       => site_url('roving_equipment'),
		'icon'      => ''
        ),
	'logout' => array(
		'name'      => lang('logout'),
		'url'       => site_url('account/logout'),
		'icon'      => 'fa fa-sign-out',
	),
	
);