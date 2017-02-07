<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index()
    {
      // echo "line 11 login controller<br>";
        $this->view->title = 'Login';

        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
    }

    function run()
    {
        $this->model->run();
    }


}
