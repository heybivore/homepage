$(document).ready(function(){
    var mouseX, mouseY;
    var ww = $( window ).width();
    var wh = $( window ).height();
    var traX, traY;
    $(document).mousemove(function(e){
       mouseX = e.pageX;
       mouseY = e.pageY;
      traX = ((4 * mouseX) / 350) + 10;
      traY = ((4 * mouseY) / 150) + 20;
      $(".title ").css({"background-position": traX + "%" + traY + "%"});
      $(".title span").css({"background-position": traY + "%" + traX + "%"});
  
    });
});