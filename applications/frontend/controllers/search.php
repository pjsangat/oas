<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search extends MY_Controller {

    public function index() {

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

    public function search_result() {

        $this->load->model(array('common_model'));
        $date = explode("/", $this->input->post('dated'));
        //exit();
//        if ($this->input->get('building_id') == 'all' or $this->input->get('facility_id') or $this->input->get('equipment_id')) {
        $query_rooms = "SELECT A.*,A.id as class_room_id ,B.* 
                        FROM rooms A
                        INNER JOIN facilities B ON A.facility_id = B.id 
                        ORDER BY A.id ASC";
//        }
        $data['dates'] = $date[2] . '-' . $date[0] . '-' . $date[1];
        $data['room'] = $this->common_model->custom_query($query_rooms);
        $this->mLayout = "empty";
        $this->mViewFile = 'search/search_result';
        $this->mViewData['room'] = $data['room'];
        $this->mViewData['dates'] = $data['dates'];
//        $this->load->view('search/search_result', $data);
    }

    public function rooms($room_id) {

        $this->load->model(array('common_model'));
        $this->mViewData['room_info'] = $this->common_model->get_single_content('room_name', 'rooms', 'id', $room_id);
        $equipment_query = "SELECT A.*,B.* 
                            FROM room_equipment A
                            INNER JOIN equipments B ON A.equipment_id = B.id
                            WHERE A.room_id = '" . $room_id . "'";


        $default_equipment_query = "SELECT A.*,B.*,C.* 
                                    FROM default_materials_rooms A
                                    LEFT JOIN group_equipment_details B ON A.group_equipment_id = B.group_equipment_id
                                    LEFT JOIN equipments C ON B.equipment_id = C.id
                                    WHERE A.room_id = '" . $room_id . "'";

        $this->mViewData['equipments'] = $this->common_model->custom_query($equipment_query);
        $this->mViewData['dequipments'] = $this->common_model->custom_query($default_equipment_query);

        $this->mViewData['title'] = 'Rooms';

        $this->mLayout = "home";
        $this->mTitle = "Rooms";
        $this->mViewFile = 'search/calendar';
    }

    public function add_forms() {
        
        $this->load->model(array('common_model'));
        $this->mViewData['organization'] = $this->common_model->get_all('*', 'organization_type', 'id', 'asc');
        $this->mViewData['venues'] = $this->common_model->get_all('*', 'venues', 'id', 'asc');
        $this->mViewData['myactivity'] = $this->common_model->get_contents('*', 'reservation', 'user_id', $this->session->userdata['user']['id'], 'id', 'asc');
        
        $this->mLayout = "empty";
        $this->mViewFile = 'search/add_forms';

    }

    public function json() {

        $this->load->model(array('common_model'));

        $calendar = "SELECT A.*,B.*,C.* 
                    FROM reservation A
                    LEFT JOIN reservation_room B ON A.id = B.reservation_id
                    LEFT JOIN venue_room_reservation C ON B.id = C.reservation_room_id where B.room_id = '" . $this->input->post('roomid') . "' and A.status = '3' ";
        $query = $this->common_model->custom_query($calendar);

        $reserv = array();
        foreach ($query as $q) {
            $start_time = date("H:i", strtotime($q->start_time . ' ' . $q->start_t));
            $end_time = date("H:i", strtotime($q->end_time . ' ' . $q->end_t));
            $reserv[] = array(
                'id' => $q->nature,
                'title' => $q->activity_name,
                'start' => $q->start . 'T' . $start_time,
                'end' => $q->end . 'T' . $end_time,
                'allDay' => false
            );
        }

        echo json_encode($reserv);
        exit;
    }

}
