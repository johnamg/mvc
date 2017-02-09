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

    function run()
    {
        $this->model->run();
    }


}
