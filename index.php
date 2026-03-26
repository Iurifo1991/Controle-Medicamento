<?php
 $hostname = "localhost";
 $bancodedados = "times";
 $usuario = "root";
 $senha ="";
 $link= mysqli_connect($hostname , $usuario , $senha )  ;
 $db= mysqli_select_db($link,$bancodedados);
 

?>