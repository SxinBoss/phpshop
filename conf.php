<?php
    define("DB_Prefix", "shop");
    define('Current_ViewPath', 'v1');

    $debug = false;
    if($debug)
    {
        define("DBIP","localhost");
        define("DBPORT","3306");
        define("DBNAME","mysql");
        define("DBUSER","root");
        define("DBPASS","123456");
    }else{
        define("DBIP",getenv("SHOPDBIP"));
        define("DBPORT",getenv("SHOPDBPORT"));
        define("DBNAME",getenv("SHOPDBNAME"));
        define("DBUSER",getenv("SHOPDBUSER"));
        define("DBPASS",getenv("SHOPDBPASS"));
    }
