<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$gender = $_POST['gender'];

if($nama == ""){

    header("location:kominfo.php?nama=kosong");
    
    }else{
    
    echo "Nama anda adalah  $nama <br>";
    }
if($alamat == ""){
    header("location:");
}else{
    echo "Alamat anda adalah $alamat <br>";
}

if($ttl == ""){
    header("location:");
}else{
    echo "Tempat dan Tanggal Lahir anda adalah $ttl <br>";
}

if($gender == ""){
    header("location:");
}else{
    echo "Jenis kelamin anda adalah $gender <br>";
}

?>