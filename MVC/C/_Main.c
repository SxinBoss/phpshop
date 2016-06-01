<?php
   class _Main
   {
        var $_viewName='index';
        var $_objList = array();
        function addObject($objName,$obj)
        {
            $this->_objList[$objName]=$obj;
        }

        function setViewName($vname)
        {
            $this->_viewName=$vname;
        }

        function run()
        {
            extract($this->_objList);
            include 'MVC/V/'.Current_ViewPath.'/head.tpl';
            include 'MVC/V/'.Current_ViewPath.'/'.$this->_viewName.'.tpl';
            include 'MVC/V/'.Current_ViewPath.'/footer.tpl';
        }
   }