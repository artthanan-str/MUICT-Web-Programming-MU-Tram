



function magnify(){
  var magnify = document.getElementById("magnify_buttom");
  if(magnify.value == "true"){
    $("#magnify_buttom").css("background-color","rgb(76, 175, 80)");
    magnify.value = false;
  }
  else{
    $("#magnify_buttom").css("background-color","#777");
    magnify.value = true;
  }


}
