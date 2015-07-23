<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Controller {

	public function index(){
            
            $this->load->model('building_model', 'building');
            $this->load->model('equipment_model', 'equipment');
            $this->load->model('facility_model', 'facility');
            
            $data = array();
            $data['buildings'] = $this->building->get_many_by(array('active' => 1));
            $data['equipments'] = $this->equipment->get_many_by(array('active' => 1));
            $data['facilities'] = $this->facility->get_many_by(array('active' => 1));

            $this->mLayout = "home";
            $this->mTitle = "Venue And Reservation";
            $this->mViewFile = 'search';
            $this->mViewData['data'] = $data;
            
	}
        
        
}