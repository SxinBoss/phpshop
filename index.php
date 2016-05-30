<?php
    include "conf.php";
    include "lib/db/NotORM.php";
    $pdo = new PDO(DBDSN,DBUSER,DBPASS,array(
		PDO::ATTR_PERSISTENT=>true  
	));
	$pdo->exec("set names utf8");  
	$db = new NotORM($pdo);
	
	foreach ($db->shop_news() as $news) { 
    echo "$news[news_title]\n"; 
}