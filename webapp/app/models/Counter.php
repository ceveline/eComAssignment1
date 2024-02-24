<?php

namespace app\models;

class Counter
{
    public $count;

    public function __construct()
    {
        $filename = 'resources/counter.txt';

        if (file_exists($filename)) {
            // Open the file for reading
            $file_handle = fopen($filename, 'r');

            // Obtain exclusive access to the file
            flock($file_handle, LOCK_SH);

            // Read the content of the file
            $count = fread($file_handle, filesize($filename));

            // Release the exclusive access to the file
            flock($file_handle, LOCK_UN);

            // Close the file
            fclose($file_handle);
        } else {
            $count = '{"count":0}';
        }

        $count_dec = json_decode($count);
        $this->count = $count_dec->count;
    }

    public function increment()
    {
        $this->count++;
    }

    public function write()
    {

        $count = json_encode($this);

        $filename = 'resources/counter.txt';

        $file_handle = fopen($filename, 'w');

        flock($file_handle, LOCK_EX);

        fwrite($file_handle, $count . "\n");

        fclose($file_handle);
    }

    public function __toString()
    {
        $val = json_encode($this);
        return $val;
    }
}
