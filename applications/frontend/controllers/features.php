<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Features extends MY_Controller {

	public function index()
	{
		$this->mLayout = "home";
		$this->mTitle = "Features";
		$this->mViewFile = 'features';
	}
}