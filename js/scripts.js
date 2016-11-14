$(function(){

	console.log("It's working");

	$('a').smoothScroll();

	//reduce nav height on scroll
	$(document).on("scroll", function() {
		if($(document).scrollTop()>100) {
			$("nav").removeClass("large").addClass("small");
		} else {
			$("nav").removeClass("small").addClass("large");
		}
		
	});

	//scatter h1 on hover
	

	gulp.task('bs', function() {
		browserSync.init({
			proxy: 'http://localhost:8888'
		});
	});

});