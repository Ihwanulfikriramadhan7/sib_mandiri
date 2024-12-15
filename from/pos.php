<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pos.php" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama"><br>

        <label for="password">password</label><br>
        <input type="password" name="pass"><br>
       
        <button type="submit" name="login" value="login">Login</button>
    </form>
</body>
</html>
<?php
$username = $_POST['nama'];
$password = $_POST['pass'];

// tamplikan data yang sedang di proses
$login = $_POST['login'];
if(isset($login)){
    echo'Hallo :'.$username.', Password anda:'.$password;
}
 

?>