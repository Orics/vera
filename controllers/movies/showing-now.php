<?php
    require_once "./models/movies.php";

    $movies = GetMoviesShowingNow();
    
    if(file_exists("./views/movies/showing-now.php"))
        require_once "./views/movies/showing-now.php";
    else
        echo "404 Not found view !!!";
?>