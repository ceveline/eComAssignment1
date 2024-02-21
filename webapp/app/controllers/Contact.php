<?php
/*
Contact Controller
To receive the data from the form discussed earlier, your program must extract the right data from $_POST and 
use it to set a new Message model object’s properties.

To the same object, your program must set the IP address obtained from accessing $_SERVER['REMOTE_ADDR'].
Then, your program must call the write method of that message model object.

Once the writing is complete, the program must redirect to the localhost/Contact/read URL with the 
following instruction: header('location:/Contact/read');
*/

function view($name, $data=null){
    //load the view files to present them to the Web user
    include('app/views/' . $name . '.php');
}

function landing() {
    view('landing');
}