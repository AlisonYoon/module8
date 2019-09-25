<?php

# Model is classes that stores and retrieves data
//it has dependency on DB connection
//so it needs a Factory

//store DB connection details in the settings.php file
/*
 * inside <settings.php>
 *
 *     'db' => [
        'host' => '192.268.20.20',
        'dbname' => 'example',
        'username' => 'root',
        'password' => ''
    ]
 * */

//Slim takes settings file into DIC.
//I get settings out of DIC by (get('settings'))
//in the dependencies.php file, I can use this for new PDO object.
//most of the time, you just need one DB so it makes sense to have the DB connection inside DIC.

//make Models directory inside src, create a class.
//this Model class has dependency so now create a Factory for this inside Factories directory.


