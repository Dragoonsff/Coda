<?php
    #instanttiates a new slim aplication
    require("../vendor/autoload.php");
    #instantiates a new slim aolication
    $app = new \Slim\Slim();
    #defines a router fot he GET method
    $app->get("/", function(){
            echo "Hello my Dragoons";
    });
    #Actually runs the aplication
    $app->run();
