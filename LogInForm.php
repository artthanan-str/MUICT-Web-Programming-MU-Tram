<html>
<body>
  <link rel="stylesheet" type="text/css" href="LogInForm_Modal.css">
  <link rel="stylesheet" type="text/css" href="LogInForm.css">
  <!-- Button to open the modal login form -->
<button onclick="document.getElementById('startModal').style.display='block'">Login</button>

<!-- The Modal -->
<div id="startModal" class="modal">

  <!-- Modal Content -->
  <form class="modal-content animate" action="action_page.php">

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('startModal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
