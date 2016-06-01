<?php
    class index extends _Main
    {
        function index()
        {
            $this->setViewName('index');
            $this->addObject('test','Test');
        }



    }