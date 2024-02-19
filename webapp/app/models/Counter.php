<?php

namespace app\models;

class Counter {
    public $count;

    public function __construct() {
        $filename = '/resources/counter.txt';

        if (file_exists($filename)) {
            

            // open a file for writing (append)
            $file_handle = fopen($filename, 'a'); //a is for append, w for writing from the start

            // obtain exclusive access to the file (making sure the program isn't writing it at the same time as a different program, to avoid data corruption)
            flock($file_handle, LOCK_EX);

            // format the data and write to the file
            $data = json_encode($this); // this = our object = person
            fwrite($file_handle, $data . "\n"); // placing record line by line

            // release the exclusive access to the file
            flock($file_handle, LOCK_UN); // UN = unlocking

            // close the file
            fclose($file_handle);
        }
        else {
            $count = '{"count":0}';
        }

        $count_dec = json_decode($count);
        $this->count = $count_dec -> count;
    }

    public function increment() {
        $this->count++;
    }

    public function write() {
        /*
        1.
        json_encode this object into $count;
        2.
        Open the counter.txt file for writing (use fopen);
        3.
        Lock the file for writing (use flock);
        4.
        Overwrite the file contents with $count (use fwrite).
        5.
        Close the file (use fclose)
        */

        $count = json_encode($this);

        $filename = '/resources/counter.txt';

        $file_handle = fopen($filename, 'w');

        flock($file_handle, LOCK_EX);

        fwrite($file_handle, $count . "\n");

        fclose($file_handle);
        
    }

    public function __toString() {
        $val = json_encode($this);
        return $val;
    }
}