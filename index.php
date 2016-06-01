<?php
    require "conf.php";
    require "MVC/C/_Main.c";

    $get_control = isset($_GET['control'])?trim($_GET['control']):'index';
    $get_action = isset($_GET['action'])?trim($_GET['action']):'index';
    
    if(file_exists('MVC/C/'.$get_control.'.c'))
    {
        require 'MVC/C/'.$get_control.'.c';
        $control = new $get_control();
        if (method_exists($control, $get_action))
        {
            $control->$get_action();
            $control->run();
        }
    }