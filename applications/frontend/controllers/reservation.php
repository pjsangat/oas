<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservation extends MY_Controller {

	public function index()
	{
            
            
            redirect('account/login');
            $this->mLayout = "home";
            $this->mTitle = "Reservation";
            $this->mViewFile = 'account/login';
	}
}