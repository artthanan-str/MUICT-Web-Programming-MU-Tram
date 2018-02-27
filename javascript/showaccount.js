$(document).ready(function(){
  $(".cancelbutton").click(function(){
    $.ajax({
      type: 'POST',
      url: 'delete-photo.php',
      data: { album: this.value},
      success: function(html) {
        location.reload();
      }
    });
  });

});
