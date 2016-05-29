<?php
    include "conf.php";
    include "NotORM.php";
    $dbbstr='mysql:host='.DBIP.';port='.DBPORT.';dbname='.DBNAME;
    $pdo = new PDO('mysql:host='.DBIP.';port='.DBPORT.'; dbname='.DBNAME,DBUSER,DBPASS,array(
		PDO::ATTR_PERSISTENT=>true  
	));  
	
	$db = new NotORM($pdo);