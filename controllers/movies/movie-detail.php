<?php
    require_once "./models/movies.php";

    $movie = GetMovie($params[0]);
    
    if(file_exists("./views/movies/movie-detail.php"))
        require_once "./views/movies/movie-detail.php";
    else
        echo "404 Not found view !!!";
?>