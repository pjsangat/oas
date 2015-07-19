<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {

	public function index()
	{
		$this->mLayout = "home";
		$this->mTitle = "About";
		$this->mViewFile = 'about';
	}
}