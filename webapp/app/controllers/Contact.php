<?php
namespace app\controllers;

use stdClass;

class Contact extends \app\core\Controller{
    function landing() {
        $this->view('landing');
    }

    // need to do the routing
    function about() {
        //show about us view
        $this->view('about');

    }

    // need to do the routing
    function contact() {
        //show contact view
        $this->view('contact');

    }

    // need to do the routing
    function message_listing() {
        // show message_listing view
        $this->view('message_listing');
    }
}

