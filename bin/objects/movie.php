<?php
   class Movie
   {   
       public $MovieID;
       public $ImgUrl;
       public $CCode;
       public $Title;
       public $Directors;
       public $Producers;
       public $Country;
       public $ReleaseDate;
       public $Duration;
       public $Content;
       public $Status;
       public $TotalStars;
       public $NumberVote;
       public function Movie()
       {
           $TotalStars = $NumberVote = 0;
       }
       public function InsertData(){
           $table = "movie";
           $values = array(
               "ImgUrl" => $this->ImgUrl,
               "CCode" => $this->CCode,
               "Title" => $this->Title,
               "Directors" => $this->Directors,
               "Producers" => $this->Producers,
               "Country" => $this->Country,
               "ReleaseDate" => $this->ReleaseDate,
               "Duration" => $this->Duration,
               "Content" => $this->Content,
               "Status" => $this->Status,
               "TotalStars" => $this->TotalStars,                         
               "NumberVote" => $this->NumberVote
           );
           $db = new Database();
           return  $db->insert($table, $values);          
       }
   };
?>