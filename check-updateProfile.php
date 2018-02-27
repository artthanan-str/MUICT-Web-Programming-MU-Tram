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

    $post_name = $_SESSION['login-username'];

    if($_FILES["updateProfile"]["name"] != ""){
      $image = addslashes(file_get_contents($_FILES['updateProfile']['tmp_name']));
      $sql = "UPDATE user SET profile='$image' WHERE userName='$post_name'";

      if ($connect->query($sql) === TRUE) {
        $result = mysqli_query($connect, "SELECT * from user WHERE userName='$post_name'");
        while($row = mysqli_fetch_array($result)){
          $blobIMG = $row['profile'];
        }

        $_SESSION['login-image'] = $blobIMG;
        header("location: showAccount.php");
      }
      else {
        echo "Error";
      }
    }
    header("Location: showaccount.php");
 ?>
