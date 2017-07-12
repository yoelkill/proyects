<?php

   function getConnection(){
      include("settings.php"); 

      $conn = mysql_connect('localhost', 'root', '');
      if(!$conn){
         die ("Could not connect to the database. ".mysql_error());
      }

      if(!mysql_select_db('database')){
         die ("Could not select to the database. ".mysql_error());
      }

     return $conn;
  }

?>
