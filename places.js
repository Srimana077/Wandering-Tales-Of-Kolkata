$(document).ready(function() {
    //Set the carousel options
    $('#quote-carousel').carousel({
      pause: true,
      interval: 4000,
    });
  });
  function openNav() {
    document.getElementById("mySidepanel").style.width = "100%";
    document.getElementById("mySidepanel").style.height = "100%";
}
  
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}
  