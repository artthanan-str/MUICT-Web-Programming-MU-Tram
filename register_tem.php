<html>
<header>
<?php include "menubar.php" ; ?>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="search.css" />
<link rel="stylesheet" type="text/css" href="register_css.css" />
</header>

<body>

  <div class="container" style="padding: center">
    <h1><div id="textRegister">Register</div></h1>
    <label style="margin-right: 40px"><b>First name</b></label><input type="text" placeholder="Enter first name" name="lastname" required><br>
    <label style="margin-right: 40px"><b>Last name</b></label><input type="text" placeholder="Enter last name" name="lastname" required><br>
    <label style="margin-right: 40px"><b>Username</b></label><input type="text" placeholder="Enter username" name="username" required><br>
    <label style="margin-right: 40px"><b>Password</b></label><input type="text" placeholder="Enter password" name="password" required><br>
    <label style="margin-right: 25px"><b>Date of birth</b></label><input type="date" placeholder="mm/dd/yy" name="birthday" required><br>
    <label style="margin-right: 60px"><b>Gender</b></label><input type="radio" name="gender" value="male" checked>Male&nbsp
                                                           <input type="radio" name="gender" value="female">Female <br>
    <button type="submit">register</button>
  </div>
</body>
</html>
