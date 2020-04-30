// ================= ADMIN ===================== //
 $(document).ready(function () {
 	//Kabag lab sidebar
    $('.dropdown-kabag a').unbind('click').click(function () {
        $(this).children('.show-icon').toggle().end().children('.hide-icon').toggle().end().siblings().slideToggle(400);
    });


    //collapse nav mobile
	  $(".navbar-header button").click(function(){
	    $("nav").toggleClass("open-nav");
	    $("body").toggleClass("menu-on");
	  });
});