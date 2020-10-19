<?php

class controller {

    public function loadTemplate($viewname) {

        require 'views/template.php';
    }

    public function loadViewInTemplate($viewname) {

        require 'views/'.$viewname.'.php';
    }
}

?>