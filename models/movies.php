<?php
    require_once  "./bin/objects/database.php";
    require_once "./bin/objects/movie.php";

    function GetMoviesShowingNow(){
        $movies = array();
        $DB = new Database();
        if(isset($DB->conn)){
            $sql = "SELECT * FROM movie where status = '0'";
            $rs = mysqli_query($DB->conn, $sql);
            while ($row = mysqli_fetch_array($rs))
            {   
                $movie = new Movie();
                $movie->MovieID = $row["MovieID"];
                $movie->ImgUrl = $row["ImgUrl"];
                $movie->CCode = $row["CCode"];
                $movie->Title = $row["Title"];
                $movie->Directors = $row["Directors"];
                $movie->Producers = $row["Producers"];
                $movie->Country = $row["Country"];
                $movie->ReleaseDate = $row["ReleaseDate"];
                $movie->Duration = $row["Duration"];
                $movie->Status = "1";
                $movie->TotalStars =  $row["TotalStars"];
                $movie->NumberVote =  $row["NumberVote"];
                array_push($movies, $movie); 
            }
        }
        else{
            echo "connect fail";
        }
        
        return $movies;
    }



    function GetMoviesCommingSoon(){
        $movies = array();
        if(isset($conn)){
            $sql = "SELECT * FROM movie where status = '1'";
            $rs = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($rs))
            {    
                $movie = new Movie();
                $movie->MovieID = $row["MovieID"];
                $movie->ImgUrl = $row["ImgUrl"];
                $movie->CCode = $row["CCode"];
                $movie->Title = $row["Title"];
                $movie->Directors = $row["Directors"];
                $movie->Producers = $row["Producers"];
                $movie->Country = $row["Country"];
                $movie->ReleaseDate = $row["ReleaseDate"];
                $movie->Duration = $row["Duration"];
                $movie->Status = "1";
                $movie->TotalStars =  $row["TotalStars"];
                $movie->NumberVote =  $row["NumberVote"];
                array_push($movies, $movie); 
            }
        }
        return $movies;
    }



    function GetMovie($movieid){
        
    }

?>