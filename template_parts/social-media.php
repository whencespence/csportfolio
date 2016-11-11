<?php

	if( have_rows('social_media_icons', 'option') ):

	    while ( have_rows('social_media_icons', 'option') ) : the_row();

	    	$social_media_name = get_sub_field('social_media_name','option');
	        $social_media_url = get_sub_field('social_media_url','option');

	        	if($social_media_name == 'linkedin' && $social_media_url !== " ") {
	        		echo '<li><a href="' . $social_media_url . '"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
	        	}
	        	elseif ($social_media_name == 'twitter') {
					echo '<li><a href="' . $social_media_url . '"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
	        	}
	        	elseif($social_media_name == 'github') {
	        		echo '<li><a href="' . $social_media_url . '"><i class="fa fa-github" aria-hidden="true"></i></a></li>';
	        	}
	        	elseif($social_media_name == 'codepen') {
	        		echo '<li><a href="' . $social_media_url . '"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>';
	        	}
	        	elseif($social_media_name == 'medium') {
	        		echo '<li><a href="' . $social_media_url . '"><i class="fa fa-medium" aria-hidden="true"></i></a></li>';
	        	}

	    endwhile;

	else :

	endif;

?>