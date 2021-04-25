<?php
    require_once('helper.php');
    $nama = $_POST['nama'];
    $genre = $_POST['genre'];
    $asal = $_POST['asal'];

    $query = "INSERT INTO penyanyi(nama,genre,asal) VALUES ('$nama','$genre','$asal')";
    $sql = mysqli_query($db_connect, $query);

    if ($sql){ 
        echo json_encode(array('message' => 'created'));
    } else{
        echo json_encode(array('message' => 'error guys'));
    }

?>