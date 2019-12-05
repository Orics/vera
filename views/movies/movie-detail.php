<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php
    echo "movie-detail view <br>";
    echo $movie->Title."<br>";
    echo $movie->MovieID."<br>";
    echo $movie->Status."<br>";
    if($movie->Status == "0"){
        echo "<button class='movie-detail-buyticket' value='".$movie->MovieID."' >Mua ve</button>";
    }
?>

<script>
    $(document).ready(function(){
        $(".movie-detail-buyticket").click(function(){
            window.location.href = "/vera/buy-ticket/choose-showing/"+$(this).val();           
        });
    })
</script>

