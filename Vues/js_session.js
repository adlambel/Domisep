function init() {
  $(".list_password").hide();
  $(".input_name").hide();

}

$(".session").click( function(){
  if ($(this).hasClass("selected")){}
 else{
    $(".session").removeClass("selected");
    $(this).addClass("selected");
    $(".list_password").hide(150);
    $(this).find(".list_password").show(250);
    $(this).find(".list_password").children().get(0).focus();
  }
});

$(".input").on("input", function(){
  var index = $(this).index();
  if(index < 3){
    $(this).next().focus();
  }
  else{
    if($(this).parent().parent().hasClass("last")){
      $(".input_name").show(150);
      $(".input_name").focus();
    }
    $(this).parent().parent().css("background-color#3498db");
  }
});

$(".input_name").on("input", function(){
  $(".img_plus").addClass("active");
});

$(".last").click( function(){
    $(this).css("opacity","1");
});

function addSession(name){

}
