<?php
    include "lib/db/NotORM.php";
    $dbbstr='mysql:host='.DBIP.';port='.DBPORT.';dbname='.DBNAME;
    $pdo = new PDO('mysql:host='.DBIP.';port='.DBPORT.'; dbname='.DBNAME,DBUSER,DBPASS);

    $db = new NotORM($pdo);
    foreach ($db->shop_news() as $news) { // get all applications
        echo $news['news_title'].'<br />'; // print application title
    }