$( document ).ready(function() {


/*	$(".nav li").click(function() {
		$(this).addClass("active");
	});*/

$('ul.nav.nav-pills li a').click(function(e) {
	//e.preventDefault();	           
	$(this).parent().addClass('active').siblings().removeClass('active');
});

});