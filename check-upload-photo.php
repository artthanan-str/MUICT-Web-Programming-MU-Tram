<?php
    SESSION_START();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tram";

    $connect = new mysqli($servername, $username, $password, $dbname);
    if($connect->connect_error){
      die("Connection error: ".$connect->connect_error);
    }
    $id = $_SESSION["stationID"];
    $user = $_SESSION['login-username'];
    $post_name = $_SESSION['login-username'];

    if($_FILES["updateProfile"]["name"] != ""){
      $image = addslashes(file_get_contents($_FILES['updateProfile']['tmp_name']));
      $sql = "INSERT INTO photos (stationID, userName, image) VALUES ('".$id."','".$user."','".$image."');";

      if ($connect->query($sql) === TRUE) {
        echo "success ..";
        header("refresh: 2; url= location.php");
      }
      else {
        echo "Error!!";
        header("refresh: 2; url= location.php");
      }
    }
    else{
      header("Location: location.php");
    }
 ?>
