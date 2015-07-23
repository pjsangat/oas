<?php

/* 
    Created on : Jul 23, 2015, 5:43:14 PM
    Author     : nmi pjsangat
*/



class Roving_equipment extends MY_Controller {

	public function index(){
            
            $this->load->model('equipment_model', 'equipment');
            $this->load->model('furniture_model', 'furniture');
            
            $data = array();
            $data['equipments'] = $this->equipment->get_many_by(array('active' => 1));
            $data['furnitures'] = $this->furniture->get_many_by(array('active' => 1));

            $this->mLayout = "home";
            $this->mTitle = "Roving Equipment";
            $this->mViewFile = 'roving_equipment';
            $this->mViewData['data'] = $data;
            
	}
        
        
}