<?php
// echo "hello";
namespace app\models;

class Message {
    public $email;
    public $message;
    public $IP;

    public function __construct($object = null){
		if($object == null)
			return;// avoid this running when there is no parameter....
		$this->message = $object->message;
		$this->email = $object->email;
        $this->IP = $object->IP;
		
	}

    public static function read() {
        // $file_name = 'resources/messages.txt';

        // $content = file($file_name);

        // return $content;

        //read the file and return the collection of people (all Person records)
		$filename = 'resources/messages.txt';
		$records = file($filename);
		//TODO: process the JSON strings into objects
		foreach ($records as $key => $value) {
			//can I typecase objects in PHP?
			$object = json_decode($value);
			$msg = new \app\models\Message($object);
			$records[$key] = $msg;
		}
		return $records;
    }


    public static function write($data) {
        $message_input = json_encode($data);
        $filename = 'resources/messages.txt';
        $file_handle = fopen($filename, 'a');
        flock($file_handle, LOCK_EX);
        fwrite($file_handle, $message_input . "\n");
        fclose($file_handle);
    }
    
    // public static function write() {

    //     $message_input = json_encode($this);

    //     $filename = 'resources/messages.txt';

    //     $file_handle = fopen($filename, 'a');

    //     flock($file_handle, LOCK_EX);

    //     fwrite($file_handle, $message_input . "\n");

    //     fclose($file_handle);

    // }
}