<?php

class Core {

    public function index() {

        $url = '/';
        $params = array();

        if(isset($_GET['url'])) {

            $url .= $_GET['url'];
        }

        if(!empty($_GET['url']) && $url != '/') {

            $url = explode('/',$url);
            array_shift($url);
            $currentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) && $url[0] != '/') {

                $currentAction = $url[0];

            } else {

                $currentAction = 'index';

            }
            array_shift($url);
            if(count($url) > 0) {

                $params = $url;
            }
        } else {

            $currentController = 'homeController';
            $currentAction = 'index';
        }

        $c = new $currentController();
        call_user_func_array(array($c,$currentAction),$params);
    }
}

?>