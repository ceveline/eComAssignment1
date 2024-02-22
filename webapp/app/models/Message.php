<?php

namespace app\models;

class Message {
    public $email;
    public $message;
    public $IP;

    public function read() {
        $file_name = '/resources/messages.txt';

        $content = file($file_name);

        return $content;
    }

    public function write() {

        $message = json_encode($this);

        $filename = '/resources/messages.txt';

        $file_handle = fopen($filename, 'a');

        flock($file_handle, LOCK_EX);

        fwrite($file_handle, $message . "\n");

        fclose($file_handle);

    }
}

