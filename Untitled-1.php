<!DOCTYPE html>
<html>

<?php
 $نام = $_POST["نام"];
 $نامخانوادگی = $_POST["نام خانوادگی"]; 
 $توضیحات=$_POST["توضیحات"];
 $پستالکترونیک=$_POST["پست الکترونیک"];
 
 for ($x=0; $x<=10000; $x++)
 {  
 $file = fopen("$x.txt","w");
fwrite($file,"$نام<br/>");
fwrite($file,"$نامخانوادگی <br/>");
fwrite($file,"$پستالکترونیک<br/>");
fwrite($file,"$توضیحات<br/>");
 fclose($file);
 }
 ?>
 <html/>