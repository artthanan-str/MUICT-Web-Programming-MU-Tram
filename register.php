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
  <link rel="stylesheet" type="text/css" href="css/LogInForm.css" />

<!-- Art so good already -->

</head>
<body>
  <!-- MenuFile -->
  <?php include 'menubar.php';?>

  <div id="back">
    <div id="backpage">
      <div id="registerBox">
        <h1 class="center">Register</h1>
        <form action="check-register.php" method="post" enctype="multipart/form-data">
          <table style="overflow: hidden">
            <tr>
              <td><b>First name</b></td>
              <td><input type="text" placeholder="Enter first name" name="firstname" required></td>
            </tr>
            <tr>
              <td><b>Last name</b></td>
              <td><input type="text" placeholder="Enter last name" name="lastname" required></td>
            </tr>
            <tr>
              <td><b>Username</b></td>
              <td><input type="text" placeholder="Enter username" name="username" required></td>
            </tr>
            <tr>
              <td><b>Password</b></td>
              <td><input type="password" placeholder="Enter password" name="password" required></td>
            </tr>
            <tr>
              <td><b>Date of birth</b></td>
              <td><input type="date" placeholder="mm/dd/yy" name="birthday" required></td>
            </tr>
            <tr>
              <td><b>Gender</b></td>
              <td><input type="radio" name="gender" value="male" checked>Male
                  <input type="radio" name="gender" value="female">Female <br>
              </td>
            </tr>
            <tr>
              <td><b>image profile</b></td>
              <td>
                <label style="margin-top:10px;color:white;background-color:28B5C7;" for="files" class="btn">Change your profile</label>
                <input id="files" style="visibility:hidden;" name="upload" type="file">
              </td>
              <!-- <td><input type="file" name="upload" required></td> -->
            </tr>
            <tr>
              <td><button type="submit" class="submit-register">Register</button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>

  <?php include 'credit.php';?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="javascript/TramjQuery.js"></script>
  <script src="javascript/javascript.js"></script>
  <script src="javascript/jquery.js"></script>
  <script src="javascript/toggleScript.js"></script>
  <script src="javascript/TramScript.js"></script>
</body>
</html>
