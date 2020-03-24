<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>

<form enctype="multipart/form-data" method="post" action="">
    <input type="text" name="user" placeholder="Usuario.">
	<input type="password" name="pass" placeholder="Senha.">
	<input type="submit" name="enviar">

</form>

<?php 
    session_start(); 

    if(isset($_SESSION['usuario']) == true){

        header("Location: session.php");

    }
?>
<?php
    session_start();

	if(isset($_POST['enviar'])){
			
        $Password = $_POST['pass'];
        $User=$_POST['user'];
        $_SESSION['usuario']=$User;

        if($Password == $_POST['pass']){

            $_SESSION['senha'] = $Password;
            header("Location: session.php");

        }else{
            echo "Tente novamente";
        }
    }

	?>   
</body>
</html>