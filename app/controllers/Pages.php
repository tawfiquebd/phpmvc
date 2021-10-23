<?php

class Pages extends Controller {

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page',
            'name' => 'Md Tawfique Hossain'
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $this->view('pages/about');
    }
}