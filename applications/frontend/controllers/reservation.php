<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reservation extends MY_Controller {

    public function index() {


        if (isset($this->session->userdata['user'])) {
            
            $this->mLayout = "home";
            $this->mTitle = "Reservation";
            $this->mViewFile = 'my_reservation';
            
        } else {
            redirect('account/login');
            exit;
        }
    }

}
