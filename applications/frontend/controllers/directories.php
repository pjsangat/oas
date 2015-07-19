<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Directories extends MY_Controller {

	public function index()
	{
		$this->mLayout = "home";
		$this->mTitle = "Directory";
		$this->mViewFile = 'directory';
	}
}