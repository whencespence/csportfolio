$(function(){

	console.log("It's working");

	$('a').smoothScroll();

	gulp.task('bs', function() {
		browserSync.init({
			proxy: 'http://localhost:8888'
		});
	});

});