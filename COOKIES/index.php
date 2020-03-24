<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
<form action="" method="POST">
     <input type="text" method="POST" name="campo">  
     <button type="submit">Entrar</button>
</form>
    <?php
    
    $nome = $_POST['campo'];
    if(isset($nome)){
       setcookie('nm',$_POST['campo'],time() + 3600);
       header("location:cookies.php");      
   }
   ?>
    
</body>
</html>


