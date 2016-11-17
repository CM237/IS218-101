<?php
   if(!file_exists("users.csv")) {
      die("File not found");
   }else {
      $file = fopen("/tmp/test.txt","r");
      print "Opened file sucessfully - users.csv found";
   }
   
?>