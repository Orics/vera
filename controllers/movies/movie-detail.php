<?php
    require_once "./models/movies.php";
    if(isset($param)){
        $movie = GetMovie($param);
        if(file_exists("./views/movies/movie-detail.php"))
            require_once "./views/movies/movie-detail.php";
        else
            echo "404 Not found view !!!";
    }
    else
        echo "No movie selected!!!"
?>