<?php require_once $_SERVER['DOCUMENT_ROOT']."/Cinema/views/header.php" ?>
<div class="movies-container">
    <?php
        foreach ($movies as $movie) {
            echo '
                <div class = "movies-movie">
                    <img src="data:image/jpeg;base64,'.base64_encode($movie->ImgUrl).'" alt="not found">
                    <div class="movies-movie-ccode">'.$movie->CCode.'</div>
                    <div class="movies-movie-title">'.$movie->Title.'</div>
                    <div class="movies-movie-veil"></div>
                    <form action="movie-detail.php" method="GET">
                        <button name="movieid" value ="'.$movie->MovieID.'" class ="movies-movie-viewbtn">View</button>
                    <form>
                </div>
            ';
        }
    ?>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT']."/Cinema/views/footer.php" ?>