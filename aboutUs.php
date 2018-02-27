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
  <link rel="stylesheet" type="text/css" href="css/aboutUsStyle.css" />

<!-- Art so good already -->

</head>
<body>
  <!-- MenuFile -->
  <?php include 'menubar.php';?>

  <div id="box-background">
    <table style="width: 800px; margin:auto">
      <h1 class="center">Our member</h1>
      <tr>
        <td>
          <div class="box-image">
            <img class="image-border" src="image\Pond_Profile.jpg" style="margin:center">
          </div>
        </td>
        <td>
          <div class="box-image">
            <img class="image-border" src="image\Ice_Profile.jpg" style="margin: auto">
          </div>
        </td>
        <td>
          <div class="box-image">
            <img class="image-border" src="image\Max_Profile.jpg" style="margin: auto">
          </div>
        </td>
        <td>
          <div class="box-image">
            <img class="image-border" src="image\Art_Profile.jpg" style="margin: auto">
          </div>
        </td>
      </tr>
      <tr style="width: 100%">
        <td>
          <p class="text-name">Pond (MUICT#13)</p>
          <p class="text-name">Niramit Cheunprapanusorn</p>
          <p class="text-name">5888021</p>
        </td>
        <td>
          <p class="text-name">Ice (MUICT#13)</p>
          <p class="text-name">Parintorn Pooyoi</p>
          <p class="text-name">5888149</p>
        </td>
        <td>
          <p class="text-name">Max (MUICT#13)</p>
          <p class="text-name">Suchakree Srinara</p>
          <p class="text-name">5888170</p>
        </td>
        <td>
          <p class="text-name">Art (MUICT#13)</p>
          <p class="text-name">Thanan Sapthamrong</p>
          <p class="text-name">5888176</p>
        </td>
      </tr>

    </table>

  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="javascript/TramjQuery.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/jquery.js"></script>
  <script src="javascript/toggleScript.js"></script>
  <script src="javascript/TramScript.js"></script>
</body>
</html>
