<!-- hier werden einzelne Beiträge angezeit zb. third Post http://127.0.0.1/wordpress/2016/06/26/third-post/ --> 


<?php get_header(); 
// sucht nach header.php im template ordner


?> 

	<div id="main">
		<h1>Single.php</h1>
		<?php
		if(have_posts()) :while(have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<div id="meta">
			erstellt am: <?php the_date('d.m.Y'); ?>
			von: <?php the_author(); ?>
			Kategorie(n): <?php the_category(', '); ?></p>
			</div>
		
		
		<div class = "entry">
			<?php the_content(); ?>
		</div>
<?php endwhile; endif; ?>

 <?php comments_template(); ?>

<p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php 
previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p> 



</div>
		
	<div id="sidebar">
	
	<?php dynamic_sidebar('neue_sidebar'); ?>
	
	</div>
	
<?php get_footer(); ?>