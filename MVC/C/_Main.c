<?php
   class _Main
   {
        var $_viewName='index';
        function setVar()
        {

        }

        function setViewName($vname)
        {
            $this->_viewName=$vname;
        }

        function run()
        {
            include 'MVC/V/'.Current_ViewPath.'/head.tpl';
            include 'MVC/V/'.Current_ViewPath.'/'.$this->_viewName.'.tpl';
            include 'MVC/V/'.Current_ViewPath.'/footer.tpl';
        }
   }