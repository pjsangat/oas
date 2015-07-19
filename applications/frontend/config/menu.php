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
//		'icon'      => 'fa fa-home'
                'icon'      => ''
	),

	// Example to add sections with subpages
	'about' => array(
		'name'      => lang('about'),
		'url'       => site_url('about'),
//		'icon'      => 'fa fa-cog',
                'icon'      => ''

//		'children'  => array(
//			lang('example').'1'		=> site_url('example/demo/1'),
//			lang('example').'2'		=> site_url('example/demo/2'),
//			lang('example').'3'		=> site_url('example/demo/3'),
//		)
	),
        
        'directory' => array(
                'name'      => 'Directory',
                'url'       => site_url('directories'),
                'icon'      => ''
            
        ),
        
        'features' => array(
                'name'      => 'Features',
                'url'       => site_url('features'),
                'icon'      => ''
            
        ),
        
        'reservation' => array(
                'name'      => 'Reservation',
                'url'       => site_url('reservation'),
                'icon'      => ''
            
        )
	// end of example
);

//if (ENABLED_MEMBERSHIP)
//{
//	$config['menu']['signup'] = array(
//		'name'      => lang('sign_up'),
//		'url'       => site_url('account/signup'),
//		'icon'      => 'fa fa-plus-square',
//	);
//
//	$config['menu']['login'] = array(
//		'name'      => lang('login'),
//		'url'       => site_url('account/login'),
//		'icon'      => 'fa fa-sign-in',
//	);
//}