<?php
    require_once('helper.php');

    $query = "SELECT * FROM penyanyi";
    $sql = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push($result, array(
                'id' => $row['id'],
                'nama' => $row['nama'],
                'genre' => $row['genre'],
                'asal' => $row['asal'],
            ));
        }
        echo json_encode(array('penyanyi' => $result));
    }

?>