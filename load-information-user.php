<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tram";

    $connect = new mysqli($servername, $username, $password, $dbname);



    $id = $_POST['album'];
    $id = substr($id,13);

    $sql = 'SELECT stationID, stationName, image, green, blue, red FROM stations WHERE stationID = '.$id.';';
    $data = $connect->query($sql);

    // input other photos data

    // $sql = 'SELECT * FROM photos WHERE stationID = '.$id.';';
    // $otherPhotos = $connect->query($sql);
    // $setOther = array();
    // $i = 0;
    // if($otherPhotos->num_rows > 0){
    //   while($eachPhoto = $otherPhotos->fetch_assoc()){
    //     $setOther[$i] = 'data:image/jpeg;base64,'.base64_encode( $eachPhoto['image'] );
    //     echo '<img style="width:50px; height:50px;" src="'.$setOther[$i].'"/>';
    //     $i ++;
    //   }
    // }


    ;// set information station
    $row = $data->fetch_assoc();
    $image = $row["image"];
    $station = $row["stationName"];
    $_SESSION["stationID"] = $id;
    $_SESSION["banner"] = $row["stationName"];
    $tram_green = "";
    $tram_blue = "";
    $tram_red = "";
    $hour = (date("H")+7)%24;
    $min = date("i");
    $date = $hour.".".$min;

    // set green Tram
    if($row["green"] == 1){
      $sql = 'SELECT timeGeneral, timeSpecial FROM schedule WHERE stationID = '.$id.' and color = "green";';
      $timeSql = $connect->query($sql);
      $timeGreen = $timeSql->fetch_assoc();
      $tram_green = "True";
      $timeArray = explode(" ",$timeGreen['timeGeneral']);
      $total_green = 0;
      foreach($timeArray as $i){
          $dateTram = explode(".",$i);
          if($i > $date){
            $total_green = 60*($dateTram[0]-$hour) + ($dateTram[1]-$min);
            break;
          }
      }

    }

    // set blue Tram
    if($row["blue"] == 1){
      $sql = 'SELECT timeGeneral, timeSpecial FROM schedule WHERE stationID = '.$id.' and color = "blue";';
      $timeSql = $connect->query($sql);
      $timeBlue = $timeSql->fetch_assoc();
      $tram_blue = "True";
      $timeArray = explode(" ",$timeBlue['timeGeneral']);
      $total_blue = 0;
      foreach($timeArray as $i){
          $dateTram = explode(".",$i);
          if($i > $date){
            $total_blue = 60*($dateTram[0]-$hour) + ($dateTram[1]-$min);
            break;
          }
      }
    }

    // set red Tram
    if($row["red"] == 1){
      $sql = 'SELECT timeGeneral, timeSpecial FROM schedule WHERE stationID = '.$id.' and color = "red";';
      $timeSql = $connect->query($sql);
      $timeRed = $timeSql->fetch_assoc();
      $tram_red = "True";
      $timeArray = explode(" ",$timeRed['timeGeneral']);
      $total_red = 0;
      foreach($timeArray as $i){
          $dateTram = explode(".",$i);
          if($i > $date){
            $total_red = 60*($dateTram[0]-$hour) + ($dateTram[1]-$min);
            break;
          }
      }
    }

?>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/locationStyle.css" />
<!-- Art so good already -->

</head>
<body>
  <div style="padding: 10px">
    <h1><?php echo $station; ?></h1>
    <form action="check-upload-photo.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-xs-12 center">
        <?php
        echo '<img id="location-image" src="'.$image.'">';
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
          <h3>Schedule</h3>
      </div>
    </div>
    <?php
      if($tram_green == "True"){
    ?>
      <div class="row" style="margin-bottom: 5px">
        <div class="col-xs-1">
          <canvas class="object_Green"></canvas>
        </div>
        <div class="col-xs-11">
          <a style="color: Green">Green: </a>
          <?php
            if($total_green == 0) echo " - ";
            else echo $total_green." minute left";
          ?>
        </div>
      </div>
    <?php
      }
      if($tram_blue == "True"){
    ?>
    <div class="row" style="margin-bottom: 5px">
      <div class="col-xs-1">
        <canvas class="object_Blue"></canvas>
      </div>
      <div class="col-xs-11">
        <a style="color: Blue" >Blue: </a>
        <?php
          if($total_blue == 0) echo " - ";
          else echo $total_blue." minute left";
        ?>
      </div>
    </div>
    <?php
      }
      if($tram_red == "True"){
    ?>
    <div class="row" style="margin-bottom: 5px">
      <div class="col-xs-1">
        <canvas class="object_Red"></canvas>
      </div>
      <div class="col-xs-11">
        <a style="color: Red">Red: </a>
        <?php
          if($total_red == 0) echo " - ";
          else echo $total_red." minute left";
        ?>
      </div>
    </div>
    <?php } ?>
    <hr style="margin: 10px"/>
    <div class="row">
      <div class="col-xs-12">
            <h3>Other Photos</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <!-- Add Photos -->
        <?php include 'carousel.php';?>
      </div>
    </div>
      <?php
        if(isset($_SESSION['login-user'])){
          ?>
          <div class="row" style="margin-top: 10px">
            <div class="col-xs-12">
                <label style="color:white;background-color:28B5C7" for="files" class="btn">Add photos</label>
                <input id="files" style="visibility:hidden;" name="updateProfile" type="file">
                <button type="submit">upload</button>
            </div>
          </div>
        <?php } ?>
    </form>
  </div>
</body>

</html>
