<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tram";

    $connect = new mysqli($servername, $username, $password, $dbname);
    if($connect->connect_error){
      die("Connection error: ".$connect->connect_error);
    }
    $U_firstName = $_POST['firstname'];
    $U_lastName = $_POST['lastname'];
    $U_userName = $_POST['username'];
    $U_password = $_POST['password'];
    $U_birthDay = $_POST['birthday'];
    $U_gender = $_POST['gender'];
    $image = addslashes(file_get_contents($_FILES['upload']['tmp_name']));

    $sql = "INSERT INTO user (userName,password,firstName,lastName,birthDay,Gender,profile) VALUES ('".$U_userName."','".$U_password."','".$U_firstName."','".$U_lastName."','".$U_birthDay."','".$U_gender."','".$image."');";
    if ($connect->query($sql) === TRUE) {
      echo "New record created successfully";
      header("refresh: 2; url= index.php");
    }
    else {
      echo "Error: this username is used.";
      // echo "Error: " . $sql . "<br>" . $connect->error;
      header("refresh: 2; url= index.php");
  }



?>
