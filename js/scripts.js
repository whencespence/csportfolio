$(function(){

	console.log("It's working");

	gulp.task('bs', function() {
		browserSync.init({
			proxy: 'http://localhost:8888'
		});
	});

	$('a').smoothScroll();

    $('nav.a').click(function(){
        $('nav.a').css('background-color', 'black');
        $(this).css('color', 'white');
	});

});