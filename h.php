<?php
 $name = $_POST["fname"];
 $lastname = $_POST["lname"]; 
 $des=$_POST["description"];
 $email=$_POST["email"];
 for ($x=1; $x<=10000; $x++)
 {  
    if(!is_file("files/$x.txt")){
        $file = fopen("files/$x.txt","w");
        fwrite($file,"نام: $name".PHP_EOL);
        fwrite($file,"نام خانوادگی: $lastname".PHP_EOL);
        fwrite($file,"ایمیل: $email".PHP_EOL);
        fwrite($file,"توضیحات: $des");
        
        fclose($file);
        break;
    }
    
 }
 