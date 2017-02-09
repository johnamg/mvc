<?php

class Register extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index()
    {
      // echo "line 11 register controller<br>";
        $this->view->title = 'Register';

        $this->view->render('header');
        $this->view->render('register/index');
        $this->view->render('footer');
    }
    function login_message()
      {
        // echo "line 11 register controller<br>";
          $this->view->title = 'Register';

          $this->view->render('header');
          $this->view->render('register/login_message');
          $this->view->render('footer');
      }

    function run()
    {
        $this->model->run();
    }

    public function create()
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];

        // @TODO: Do your error checking!

        $this->model->create($data);
        header('location: ' . URL . 'register/login_message');
    }

}
