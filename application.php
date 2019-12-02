<?php

    $controller = "movies";
    $page = "showing-now";
    $params = [];

    if( isset($_GET["url"]) ){
            $url = explode("/", filter_var(trim($_GET["url"], "/")));
            if(isset($url[0])){
                $controller = $url[0];
                unset($url[0]);
            }
            if(isset($url[1])){
                $page = $url[1];
                unset($url[1]);
            }

            if(isset($url)){
                $params = array_values($url);
            }
    }

    if(file_exists("./controllers/".$controller."/".$page.".php")){
        require_once "./controllers/".$controller."/".$page.".php";
    }
    else{
        echo "404 not found";
        //echo "./controllers/".$controller."/".$page.".php";
    }
?>