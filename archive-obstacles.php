<?php

get_header();?>

<h1>Archive-Obstacles.php</h1>

<?php
if(have_posts()) : 
	while(have_posts()) : the_post();?>
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		<?php echo '<div class="entry-content">';
		the_content();
		echo '</div>';
	endwhile; 
endif;
get_footer();

?>