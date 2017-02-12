<?php get_header(); 
//Index ist die Wordpress Startseite die der User sieht(frontend)
//Hier werden nur Posts angezeigt. Keine Custom Post Types!
?> 
<h1>Hier ist Index</h2>
	<div id="main">
		<?php
		if(have_posts()) :while(have_posts()) : the_post(); ?>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<div id="meta">
			<p>
			erstellt am: <?php the_date('d.m.Y'); ?>
			von: <?php the_author(); ?>
			Kategorie(n): <?php the_category(', '); ?></p>
			</div>
		
		
		<div class = "entry">
			<?php the_content(); ?>
		</div>
<?php endwhile; endif; ?>

 <?php comments_template(); ?> <!--Bringt hier nichts, da sonst unter jedem Post alle Kommentare eingezeigt werden würden -->

<p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php 
previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p> 



</div>
		
	<div id="sidebar">
	
	<?php get_sidebar(); ?>
	
	</div>
	
<?php get_footer(); ?>