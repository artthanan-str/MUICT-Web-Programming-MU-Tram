<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tram";

    $connect = new mysqli($servername, $username, $password, $dbname);
    if($connect->connect_error){
      die("Connection error: ".$connect->connect_error);
    }
    $photosID = $_POST['album'];

    $sql = 'DELETE FROM photos WHERE photosID = '.$photosID.';';
    $connect->query($sql);




?>
