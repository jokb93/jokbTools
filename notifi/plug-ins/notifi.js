$(document).ready(function(){
    $('head').append('<link rel="stylesheet" href="css/notifi.css" type="text/css" />');
    $("body").prepend('<div id="notifi"><div id="type"></div><div id="text" class=""><p></p><a id="revNot"></a></div></div>');
});

function notifi(type, mess, seconds = 10, darkSkin = false){
    if(darkSkin){
        $("#notifi").addClass("darkskin");
    }
    $("#text p").html(mess);
    $("#type").attr("class", "");
    $("#type").addClass(type);
    $("#notifi").addClass("animation");
    $("#notifi").removeClass("animationRev");
    $("#notifi #text").addClass("animation");
    $("#notifi #text").removeClass("animationRev");
    
    setTimeout(function(){ 
        $("#notifi").removeClass("animation");
        $("#notifi").addClass("animationRev");
        $("#notifi #text").removeClass("animation");
        $("#notifi #text").addClass("animationRev");               
    }, seconds*1000);
    
}

$( document ).on( "click", "#revNot", function( event ) {
    $("#notifi").removeClass("animation");
    $("#notifi").addClass("animationRev");
    $("#notifi #text").removeClass("animation");
    $("#notifi #text").addClass("animationRev");
});