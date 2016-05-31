<?php
    include "conf.php";

    $vName = $_GET["v"];
    if(''==$vName) $vName='index';
    include 'MVC/C/index.c';
    include 'MVC/V/v1/head.tpl';
    include 'MVC/V/v1/'.$vName.'.tpl';
    include 'MVC/V/v1/footer.tpl';