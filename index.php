<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tram";

  $connect = new mysqli($servername, $username, $password, $dbname);
  if($connect->connect_error){
    die("Connection error: ".$connect->connect_error);
  }
?>

<html>
<head>
  <title>MU-Tram Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Quattrocento+Sans|Roboto|Signika" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/toggleStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/search.css" />
  <link rel="stylesheet" type="text/css" href="css/Tramstyle.css" />
  <link rel="stylesheet" type="text/css" href="css/putTramStyle.css" />
  <link rel="stylesheet" type="text/css" href="css/LogInForm.css" />
  <link rel="stylesheet" type="text/css" href="css/magnify.css" />

<!-- Art so good already -->

</head>
<body>
  <!-- MenuFile -->
  <?php include 'menubar.php';?>

    <div id="backpage">
      <div id="MapBox">
        <h1 class="center" id="banner">Welcome to <span>MU</span>-Tram</h1>
        <table style="width: 100%">
          <tr>
            <td class="center">
                <div id="map">
                  <img class="image-tram" />
                  <img src="image/map/green2.png" class="image_Green image-tram" />
                  <img src="image/map/blue2.png" class="image_Blue image-tram" />
                  <img src="image/map/red2.png" class="image_Red image-tram" />
                </div>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" class="center">
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramAll" checked onclick="acBottomAll()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">All</h1>
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramGreen" checked onclick="acBottomGreen()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">Green</h1>
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramBlue" checked onclick="acBottomBlue()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">Blue</h1>
              <label class="switch" style="margin: auto">
                <input type="checkbox" id="TramRed" checked onclick="acBottomRed()" value="true">
                <div class="slider round"></div>
              </label>
              <h1 class="Big">Red</h1>
              <a href="magnifyMap.php"><button style="width:auto;float:right;margin-right:10px">See Big Map!!</button></a>

              <br />
              <canvas class="object_Green"></canvas>
              <canvas class="object_Blue"></canvas>
              <canvas class="object_Red"></canvas>
              <!-- <canvas class="object_Yellow"></canvas> -->

            </td>
          </tr>
        </table>
      </div>
      <div id="stationBox">
        <p style="color: black; font-size: 25px">Stations</p>
        <?php
          $sql = "SELECT stationID, stationName FROM stations";
          $dbStation = $connect->query($sql);
          if($dbStation->num_rows > 0){
            while($row = $dbStation->fetch_assoc()){
              echo '<div class="stationinLine" id="station-image'.$row["stationID"].'"><a href="#" style="width: 100%">'.$row["stationID"].').'.$row["stationName"].'</a></div>';
            }
          }
          else{
            echo "0 results";
          }
        ?>
      </div>
    </div>

  <?php include 'credit.php';?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

  <script src="javascript/TramjQuery.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/jquery.js"></script>
  <script src="javascript/toggleScript.js"></script>
  <script src="javascript/TramScript.js"></script>
  <script src="javascript/location.js"></script>
  <script src="javascript/magnify.js"></script>

  <script>
// Get the modal
  var modal = document.getElementById('bigMap');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>

</body>
</html>
