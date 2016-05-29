<?php
    include "conf.php";
    include "NotORM.php";
    $dbbstr='mysql:host='.DBIP.';port='.DBPORT.';dbname='.DBNAME;
    echo $dbbstr;
    exit;
    $pdo = new PDO('mysql:host='.DBIP.';port='.DBPORT.';dbname='.DBNAME,DBUSER,DBPASS);
    $db = new NotORM($pdo);
    echo $db;


