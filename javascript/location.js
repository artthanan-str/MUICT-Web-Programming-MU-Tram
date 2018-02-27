$(document).ready(function(){
  $(".stationinLine").click(function(){
    $.ajax({
      type: 'POST',
      url: 'load-information-user.php',
      data: { album: this.id},
      success: function(result){
      $("#MapBox").html(result);
      }
    });
  });

});
