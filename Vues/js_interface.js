
function init() {
  $(".screen").hide();
  $("#slider").slider({
    min: 15,
    max: 25,
    step:0.5,
    slide: function( e, ui ) {
          $("#valueSlider").text(ui.value+"°");

    },
  });
}

$(".container_icon").click( function(){
  $(".container_icon").removeClass("selected");
  var index = $(".container_icon").index(this)
  $(this).addClass("selected");
  $(".screen").hide();

  switch($(this).attr("id")) {
    case "cam":
        $("#cam_screen").show();
        break;
    case "light":
          $("#light_screen").show();
        break;
    case "temp":
          $("#temp_screen").show();
        break;
    case "sun":
          $("#sun_screen").show();
        break;
    case "humi":
          $("#humi_screen").show();
        break;
    default:
        break;
  }
});

$(".select_room").change( function(){
  $(".select_room").css("border-color", "white");
  $(".select_room").css("box-shadow", "0px 0px 10px white");
  $(".select_room").css("border-width", "3px");
});

$(".lightImg").click( function(){
  if ($(this).hasClass("enable")){
    $(this).removeClass("enable");
    $(this).attr("src", "/Domisep/Vues/assets/images/ampoule_marine.png");

  }
  else{
    $(this).addClass("enable");
    $(this).attr("src", "/Domisep/Vues/assets/images/ampoule_ciel.png");
  }
});
