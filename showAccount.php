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
<link rel="stylesheet" type="text/css" href="css/showAccount.css" />
<body>
<?php include 'menubar.php';?>

  <div id="backpage-showAccount">
    <form action="check-updateProfile.php" method="post" enctype="multipart/form-data">

    <?php
    $post_name = $_SESSION['login-username'];
    $sql = "SELECT * FROM user WHERE userName='$post_name'";
    $printout = mysqli_query($connect, $sql);
    $user = $_SESSION['login-username'];
    while($row = mysqli_fetch_array($printout)){

      echo "<h1 class=\"Username-style\" style=\"margin-left:10px\">Username: <span>".$row['userName']."</span></h1>";
      echo '<table><tr><th rowspan="4">';
      echo '<img style="width:250px;height:250px;border-radius:150px" src="data:image/jpeg;base64,'.base64_encode( $row['profile'] ).'"/>'.'</th>';
      echo "<td><p id=\"show-name\">Name: ".$row['firstName']."</p></td></tr>";
      echo "<tr><td><p id=\"show-name\">Surname: ".$row['lastName']."</p></td></tr>";
      echo "<tr><td><p id=\"show-name\">Gender: ".$row['Gender']."</p></td></tr>";
      echo "<tr><td><p id=\"show-name\">Birthday: ".$row['birthDay']."</p></td></tr>";
    }
    ?>
    <tr><td>
      <label style="margin-left:50px;margin-top:10px;color:white;background-color:28B5C7" for="files" class="btn">Change your profile</label>
      <input id="files" style="visibility:hidden;" name="updateProfile" type="file">
    </td></tr>
    <tr><td><button style="margin-left:20px" type="submit" name="submit-updateProfile">Save</button><hr></td></tr>
      </table>

    </form>
    <div class="container" style="padding: 0px">
    <div class="row">
      <h1 class="Username-style" style="text-shadow: 0px 1px 5px #AAA;">Your photos</h1>
    </div>
      <?php
        $sql = "SELECT photosID, stationID, userName, image FROM photos WHERE userName='".$user."';";
        $data = mysqli_query($connect, $sql);
        if($data->num_rows > 0){
          while($row = $data->fetch_assoc()){
            ?>
              <div class="row">
                <div class="col-xs-2">
                  <?php
                  echo '<img class="other-photos" src="data:image/jpeg;base64,'.base64_encode($row['image']).'">';
                  ?>
                </div>
                <div class="col-xs-8">
                  <div class="row">
                    <p>userID:<?php echo $row['userName']; ?></p>
                  </div>
                  <div class="row">
                    <p>stationID:<?php echo $row['stationID']; ?></p>
                  </div>
                  <div class="row">
                    <p>PhotoID:<?php echo $row['photosID']; ?></p>
                  </div>
                </div>
                <div class="col-xs-2">
                  <?php echo '<button type="button" class="cancelbutton" value="'.$row['photosID'].'">Delete</button>'; ?>
                </div>
              </div>
              <hr />
            <?php
          }
        }
      ?>
      </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="javascript/menubar.js"></script>
<script src="javascript/showaccount.js"></script>
</body>
 </html>
