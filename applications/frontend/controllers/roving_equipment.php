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
            $this->mViewData['js'] = base_url('assets/js/pages/'.$this->router->fetch_class().".js");
            
	}
        
        public function search_results(){
            
            if($this->input->post()){
                
                $pData = $this->input->post();
                $this->load->model('furniture_model', 'furnitures');
                $this->load->model('equipment_model', 'equipments');
                
                $data = array();
                if( count($pData['furnitures']) > 0){
                    $ctr = 0;
                    foreach($pData['furnitures'] as $furniture_id){
                        $data['furnitures'][$ctr] = $this->furnitures->get_by(array('id' => $furniture_id));
                        $ctr++;
                    }
                }
                if( count($pData['equipments']) ){
                    $ctr = 0;
                    foreach($pData['equipments'] as $equipment_id){
                        $data['equipments'][$ctr] = $this->equipments->get_by(array('id' => $equipment_id));
                        $ctr++;
                    }
                }
                
                
                echo json_encode($data);
                exit;
            }
            
        }
}