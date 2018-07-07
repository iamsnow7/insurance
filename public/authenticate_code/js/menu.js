$(document).ready(function(){
  console.log("hello i am tellem");
	$(".sideMenu").addClass("hide_menu");
  $(".fa-times").addClass("hide_menu");



	$(".toggle_menu").click(function(){
    // $(".toggle_menu").addClass("hide_togle");
		$(".sideMenu").removeClass("hide_menu");
    $(".fa-times").removeClass("hide_menu");

    setTimeout(function(){
      $(".toggle_menu").addClass("hide_togle");
    }, 3000)
	});


	$(".fa-times").click(function(){
    console.log("clicked!")
		$(".sideMenu").addClass("hide_menu");
		$(".toggle_menu").removeClass("hide_togle");
    $(".fa-times").addClass("hide_menu");

	});

		$(".sideMenu").on({
		mouseleave: function(){
			$(".sideMenu").addClass("hide_menu");
		$(".toggle").removeClass("hide_menu");
		}

	});

});
