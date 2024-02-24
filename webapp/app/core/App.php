<?php

namespace app\core;

class App
{

    function __construct()
    {

        $url = $_GET['url'];

        //defined a few routes "url"=>"controller,method"
        $routes = [
            //School instructions
            'Main/index' => 'Main,index',
            'Main/about_us' => 'Main,about_us',
            'Contact/read' => 'Contact,loadMessagePage',
            'Contact/index' => 'Contact,loadContactPage',
            'Count/index' => 'Count,index',

            //Extra routes for simplicity & functionality
            '' => 'Main,index',
            'Contact/confirm_read' => 'Contact,writeMessage', //re confirm the view page
        ];


        foreach ($routes as $routeUrl => $controllerMethod) {
            if (strtolower($url) == strtolower($routeUrl)) { //match the route
                //run the route
                [$controller,$method]=explode(',', $controllerMethod);
                $controller = '\\app\\controllers\\'.$controller;
                $controller = new $controller();
                $controller->$method();
                //make sure that we don't run a second route
                break;
            }
        }
    }
}
