<?php

class Error extends Controller {

    function __construct() {
      echo "inerror construct<br>";
        parent::__construct();
    }

    function index() {
      echo "IN error controller<br>";
        $this->view->title = '404 Error';
        //$this->view->msg = 'This page doesnt exist';
        //$this->view->render('header');
      //  $this->view->render('help/index');
        //$this->view->render('footer');
        //$this->view->render('error/inc/header');
        //$this->view->render('error/index');
        //$this->view->render('error/inc/footer');
    }

}
