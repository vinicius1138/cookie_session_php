<?php
	session_start(); 
	if(!isset($_SESSION['senha']) == true){
         
		unset($_SESSION['senha']);
        header("Location:index.php");
    }    
    echo "O usuario ".$_SESSION['usuario']." foi resgistrado";
?>
