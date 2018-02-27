$(document).ready(function(){

  // Object Green effect
  $(".object_Green").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            height: '25px',
            width: '25px',
    },"fast");
    $(".image_Green").css("animation", "none");
  });
  $(".object_Green").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "2s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            height: '20px',
            width: '20px',
    },"fast");
    $(".image_Green").css("animation-name", "tramblink");
    $(".image_Green").css("animation-duration", "2s");
    $(".image_Green").css("animation-iteration-count", "infinite");
  });

  // Object Blue effect
  $(".object_Blue").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            height: '25px',
            width: '25px',
    },"fast");
    $(".image_Blue").css("animation", "none");
  });
  $(".object_Blue").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "2s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            left: '50px',
            height: '20px',
            width: '20px',
    },"fast");
    $(".image_Blue").css("animation-name", "tramblink");
    $(".image_Blue").css("animation-duration", "2s");
    $(".image_Blue").css("animation-iteration-count", "infinite");
  });

  // Object Red effect
  $(".object_Red").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            left: '0px',
            height: '25px',
            width: '25px',
    },"fast");
    $(".image_Red").css("animation", "none");
  });
  $(".object_Red").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "2s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            left: '0px',
            height: '20px',
            width: '20px',
    },"fast");
    $(".image_Red").css("animation-name", "tramblink");
    $(".image_Red").css("animation-duration", "2s");
    $(".image_Red").css("animation-iteration-count", "infinite");
  });
  // Object Yellow effect
  $(".object_Yellow").mouseenter(function(){
    $(this).css("animation", "none");
    $(this).animate({
            left: '0px',
            height: '25px',
            width: '25px',
    },"fast");
    $(".image_Yellow").css("animation", "none");
  });
  $(".object_Yellow").mouseleave(function(){
    $(this).css("animation-name", "tramblink");
    $(this).css("animation-duration", "3s");
    $(this).css("animation-iteration-count", "infinite");
    $(this).animate({
            left: '0px',
            height: '20px',
            width: '20px',
    },"fast");
    $(".image_Yellow").css("animation-name", "tramblink");
    $(".image_Yellow").css("animation-duration", "2s");
    $(".image_Yellow").css("animation-iteration-count", "infinite");
  });

});
