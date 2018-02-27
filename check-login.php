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

    $sql = "SELECT userName, password, profile FROM user";
    $data = $connect->query($sql);
    $check = "false";
    if($data->num_rows > 0){
      while($row = $data->fetch_assoc()){
        if($row["userName"] == $_POST["uname"] && $row["password"] == $_POST["psw"]){
          $check = "True";
          $_SESSION['login-username'] = $row["userName"];
          $_SESSION['login-image'] = $row["profile"];
        }
      }
    }
    if($check == "True"){
      echo "Login success ";
      $_SESSION['login-user'] = True;
      header("Location: index.php");
    }
    else{
      session_destroy();
      echo "wrong username or password !!";
      header("refresh: 2; url= index.php");
    }


?>
