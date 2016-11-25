$(function(){

	console.log("It's working");


	$('a').smoothScroll();


	////////////// reduce nav height on scroll/////////////////
	$(document).on("scroll", function() {
		if($(document).scrollTop()>100) {
			$("nav").removeClass("large").addClass("small");
		} else {
			$("nav").removeClass("small").addClass("large");
		}
	});

	///////////////// scatter h1 top text////////////////////
	var targ = $('header h1.scatter');
	var astring = targ.text();
	targ.empty();
	for (var i = 0; i < astring.length; i++) {
		var aslice = astring.substr(i, 1);
		if (aslice == ' ') aslice = '&emsp13;';
			aslice = '<span class="outer"><span class="inner">' + aslice + '</span></span>';
			targ.append(aslice);
	}
		targ.hover(function() {
			$('span.outer').each(function() {
			$(this).css({
				'transform': ' translate(' + (Math.random() * 2 - 1) + 'em,' + (Math.random() * 2 - 1) + 'em)'
				});
			$('span.inner').each(function() {
			  $(this).css({
			    	'transform': 'rotate(' + (Math.random() * 2 - 1) + 'turn)'
	  			});
			});
		});
	},
	function() {
		$(this).find('span').each(function() {
		$(this).css('transform', 'none')
		});
	});


	//////////////////// gulp thing ///////////////////////
	gulp.task('bs', function() {
		browserSync.init({
			proxy: 'http://localhost:8888'
		});
	});

});