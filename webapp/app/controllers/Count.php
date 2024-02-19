<?php

namespace app\controllers;

class Count extends \app\core\Controller {
    public function index() {
        $counter = new \app\models\Counter();

        $counter->increment();

        $counter->write();

        echo $counter;
    }
}
