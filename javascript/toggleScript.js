
function acBottomAll(){
    var bottomAll = document.getElementById("TramAll");
    var bottomGreen = document.getElementById("TramGreen");
    var bottomBlue = document.getElementById("TramBlue");
    var bottomRed = document.getElementById("TramRed");
    // var bottomYellow = document.getElementById("TramYellow");
    // document.getElementById("test_Print").innerHTML = "sssssss";
    if(bottomAll.value == "true"){
      bottomAll.value = false;
      bottomGreen.checked = false;
      bottomBlue.checked = false;
      bottomRed.checked = false;
      // bottomYellow.checked = false;
      $(".object_Green").css("display", "none");
      $(".object_Blue").css("display", "none");
      $(".object_Red").css("display", "none");
      // $(".object_Yellow").css("display", "none");

      $(".image_Green").css("display", "none");
      $(".image_Blue").css("display", "none");
      $(".image_Red").css("display", "none");
      // $(".image_Yellow").css("display", "none");

    }
    else{
      bottomAll.value = true;
      bottomGreen.checked = true;
      bottomBlue.checked = true;
      bottomRed.checked = true;
      // bottomYellow.checked = true;
      $(".object_Green").css("display", "initial");
      $(".object_Blue").css("display", "initial");
      $(".object_Red").css("display", "initial");
      // $(".object_Yellow").css("display", "initial");

      $(".image_Green").css("display", "initial");
      $(".image_Blue").css("display", "initial");
      $(".image_Red").css("display", "initial");
      // $(".image_Yellow").css("display", "initial");
    }

}

function acBottomGreen(){
  var bottomGreen = document.getElementById("TramGreen");
  if(bottomGreen.value == "true"){
    bottomGreen.checked = false;
    bottomGreen.value = false;
    $(".object_Green").css("display", "none");
    $(".image_Green").css("display", "none");
  }
  else{
    bottomGreen.checked = true;
    bottomGreen.value = true;
    $(".object_Green").css("display", "initial");
    $(".image_Green").css("display", "initial");
  }
}
function acBottomRed(){
  var bottomRed = document.getElementById("TramRed");
  if(bottomRed.value == "true"){
    bottomRed.checked = false;
    bottomRed.value = false;
    $(".object_Red").css("display", "none");
    $(".image_Red").css("display", "none");
  }
  else{
    bottomRed.checked = true;
    bottomRed.value = true;
    $(".object_Red").css("display", "initial");
    $(".image_Red").css("display", "initial");
  }
}
function acBottomBlue(){
  var bottomBlue = document.getElementById("TramBlue");
  if(bottomBlue.value == "true"){
    bottomBlue.checked = false;
    bottomBlue.value = false;
    $(".object_Blue").css("display", "none");
    $(".image_Blue").css("display", "none");
  }
  else{
    bottomBlue.checked = true;
    bottomBlue.value = true;
    $(".object_Blue").css("display", "initial");
    $(".image_Blue").css("display", "initial");
  }
}


// function acBottomYellow(){
//   var bottomYellow = document.getElementById("TramYellow");
//   if(bottomYellow.value == "true"){
//     bottomYellow.checked = false;
//     bottomYellow.value = false;
//     $(".object_Yellow").css("display", "none");
//     $(".image_Yellow").css("display", "none");
//   }
//   else{
//     bottomYellow.checked = true;
//     bottomYellow.value = true;
//     $(".object_Yellow").css("display", "initial");
//     $(".image_Yellow").css("display", "initial");
//   }
// }
