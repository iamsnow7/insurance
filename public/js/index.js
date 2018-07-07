$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
});



//javascript code for text slider
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("description");


    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";

    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000);
}
