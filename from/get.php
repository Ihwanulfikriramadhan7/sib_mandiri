<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get.php">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama"><br>

        <label for="alamat">Alamat</label><br>
        <textarea name="alamat" id="alamat"></textarea><br>
        <button type="submit" name="proses" value="simpan">Simpan</button>
    </form>
</body>
</html>

<?php 
// proses form
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

// tampilkan data jika sudah diproses
$proses  = $_GET['proses'];
if(isset($proses)){
    echo'Nama :'.$nama.'<br/>'.'Alamat :'.$alamat;
}

?>