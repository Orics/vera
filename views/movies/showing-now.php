<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="movies-container">
    <?php
        foreach ($movies as $movie) {
            echo '
                <div class = "movies-movie">
                    <img src="data:image/jpeg;base64,'.base64_encode($movie->ImgUrl).'" alt="not found">
                    <div class="movies-movie-ccode">'.$movie->CCode.'</div>
                    <div class="movies-movie-title">'.$movie->Title.'</div>
                    <div class="movies-movie-veil"></div>                 
                    <button class="movies-movie-viewbtn" value ="'.$movie->MovieID.'">View</button>  
                </div>
            ';
        }
    ?>
    <script>
        $(document).ready(function(){
            $(".movies-movie-viewbtn").click(function(){
               window.location.href = "movie-detail/"+$(this).val();           
            })
        })
    </script>
</div>
