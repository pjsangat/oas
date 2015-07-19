<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Directories extends MY_Controller {

    public function __construct() {
        parent::__construct();

        // only admin role can access this controller
        if (!verify_role('admin')) {
            redirect();
            exit;
        }

        $this->load->helper('crud');
        $this->load->model('directory_model', 'directory');
    }

    public function index() {

        // CRUD table
        $crud = generate_crud('directories');
        $crud->columns('display_name', 'position', 'department', 'email', 'active', 'created_at');
        $crud->unset_add_fields('created_by', 'created_at', 'updated_by', 'updated_at');
        $crud->unset_edit_fields('created_by', 'created_at', 'updated_by', 'updated_at');

//        $crud->callback_before_insert(array($this, 'callback_before_create_user'));

        $this->mTitle = "Directory";
        $this->mViewFile = '_partial/crud';
        $this->mViewData['crud_data'] = $crud->render();
    }

}
