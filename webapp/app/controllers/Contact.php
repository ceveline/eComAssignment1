<?php

namespace app\controllers;

class Contact extends \app\core\Controller
{
    function index()
    {
        $this->view('Contact/index');
    }

    function loadContactPage()
    {
        //show contact view
        $this->view('Contact/index');
    }

    function sendMessage()
    {

        print_r($_POST);
        $ip = $_SERVER['REMOTE_ADDR']; //get the IP address
        print_r($ip);

        $message_data = [
            'email' => $_POST['email'],
            'message' => $_POST['message'],
            'IP' => $ip
        ];

        \app\models\Message::write($message_data);
    }


    function loadMessagePage()
    {
        $messages = \app\models\Message::read();
        $this->view('Contact/read', $messages);
    }

    function writeMessage()
    {

        $email = $_POST['email'];
        $message = $_POST['message'];

        if (empty($email) || empty($message)) {
            // Redirect back to the contact page with an error message or display an error message
            echo "Please fill in both email and message fields";
            return;
        }

        print_r($_POST);
        $ip = $_SERVER['REMOTE_ADDR']; //get the IP address
        print_r($ip);

        $msg = new \app\models\Message();
        //populate the properties
        $msg->email = $email;
        $msg->message = $message;
        $msg->IP = $ip;

        \app\models\Message::write($msg);


        header('location:/Contact/read');
    }
}
