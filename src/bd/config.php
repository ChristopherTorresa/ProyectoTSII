<?php
//Database Constants
    defined('DB_SERVER') ? null : define("DB_SERVER","localhost");//define our database server
    defined('DB_USER') ? null : define("DB_USER","root");		  //define our database user
    defined('DB_PASS') ? null : define("DB_PASS","admin123");			  //define our database Password
    defined('DB_NAME') ? null : define("DB_NAME","sipu"); //define our database Name

    defined('DB_DSN') ? null : define("DB_DSN","mysql:host=".DB_SERVER.";dbname=".DB_NAME); //define el DSN para usar con PDO, no cambiar orden!
