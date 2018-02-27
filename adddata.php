<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tram";

  $connect = new mysqli($servername, $username, $password, $dbname);
  if($connect->connect_error){
    die("Connection error: ".$connect->connect_error);
  }
  $sql = "INSERT INTO `stations` (`stationID`, `stationName`) VALUES ('".$_POST["IDS"]."', '".$_POST["nameS"]."');";
  if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
  }
  else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
?>
