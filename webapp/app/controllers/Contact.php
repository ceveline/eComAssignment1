<?php
namespace app\controllers;

// use stdClass;
// use app\models\Message;

class Contact extends \app\core\Controller{
    function landing() {
        $this->view('landing');
    }

    // need to do the routing
    function about() {
        //show about us view
        $this->view('about');

    }

    function loadContactPage() {
        //show contact view
        $this->view('contact');
    }

    // need to do the routing
    function sendMessage() {

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

// show message_listing view
        // print_r($_POST);

        
        

        // $message_obj = new \app\models\Message();
        
        // $message_obj -> email = $_POST['email'];
        // $message_obj -> message = $_POST['message'];
        // $message_obj -> IP = $ip;

        // $message_obj->write();
        // $this->view('read', $message_obj);
        // header('location:/Contact/read');
        
    function loadMessagePage() {
        $messages = \app\models\Message::read();
		$this->view('read',$messages);
        // $this->view('read');
    }
    

    function writeMessage() {
        
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(empty($email) || empty($message)) {
            // Redirect back to the contact page with an error message or display an error message
            // header('Location: /Contact/contact?error=Please fill in both email and message fields');
            // exit();
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
    

