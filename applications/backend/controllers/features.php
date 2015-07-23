<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Features extends MY_Controller {

    public function __construct() {
        parent::__construct();

        // only admin role can access this controller
        if (!verify_role('admin')) {
            redirect();
            exit;
        }

        $this->load->helper('crud');
        $this->load->model('classroom_model', 'classroom');
        $this->load->model('furniture_model', 'furniture');
    }

    public function classroom() {

        // CRUD table
        $crud = generate_crud('classrooms');
        $crud->columns('name', 'active', 'created_at');
//        $crud->unset_add_fields('created_by', 'created_at', 'updated_by', 'updated_at');
//        $crud->unset_edit_fields('created_by', 'created_at', 'updated_by', 'updated_at');

//        $crud->callback_before_insert(array($this, 'callback_before_create_user'));

        $this->mTitle = "Features - Classroom";
        $this->mViewFile = '_partial/crud';
        $this->mViewData['crud_data'] = $crud->render();
    }

    public function furnitures() {

        // CRUD table
        $crud = generate_crud('furnitures');
        $crud->columns('name', 'active', 'created_at');
//        $crud->unset_add_fields('created_by', 'created_at', 'updated_by', 'updated_at');
//        $crud->unset_edit_fields('created_by', 'created_at', 'updated_by', 'updated_at');

//        $crud->callback_before_insert(array($this, 'callback_before_create_user'));

        $this->mTitle = "Features - Furnitures";
        $this->mViewFile = '_partial/crud';
        $this->mViewData['crud_data'] = $crud->render();
    }

    public function facilities() {

        // CRUD table
        $crud = generate_crud('facilities');
        $crud->columns('name', 'active', 'created_at');
//        $crud->unset_add_fields('created_by', 'created_at', 'updated_by', 'updated_at');
//        $crud->unset_edit_fields('created_by', 'created_at', 'updated_by', 'updated_at');

//        $crud->callback_before_insert(array($this, 'callback_before_create_user'));

        $this->mTitle = "Features - Facilities";
        $this->mViewFile = '_partial/crud';
        $this->mViewData['crud_data'] = $crud->render();
    }

    public function buildings() {

        // CRUD table
        $crud = generate_crud('buildings');
        $crud->columns('name', 'active', 'created_at');
//        $crud->unset_add_fields('created_by', 'created_at', 'updated_by', 'updated_at');
//        $crud->unset_edit_fields('created_by', 'created_at', 'updated_by', 'updated_at');

//        $crud->callback_before_insert(array($this, 'callback_before_create_user'));

        $this->mTitle = "Features - Buildings";
        $this->mViewFile = '_partial/crud';
        $this->mViewData['crud_data'] = $crud->render();
    }

    public function equipments() {

        // CRUD table
        $crud = generate_crud('equipments');
        $crud->columns('name', 'active', 'created_at');
//        $crud->unset_add_fields('created_by', 'created_at', 'updated_by', 'updated_at');
//        $crud->unset_edit_fields('created_by', 'created_at', 'updated_by', 'updated_at');

//        $crud->callback_before_insert(array($this, 'callback_before_create_user'));

        $this->mTitle = "Features - Equipments";
        $this->mViewFile = '_partial/crud';
        $this->mViewData['crud_data'] = $crud->render();
    }

}