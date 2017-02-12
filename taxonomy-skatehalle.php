<?php

get_header();

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
  <div id="container">
    <div id="content" role="main">

      <h1 class="page-title"><?php echo $term->name; ?> Archives</h1>

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <div class="post type-post hentry">
            <h2 class="entry-title">
              <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                <?php the_title(); ?>
              </a>
            </h2>

            <div class="entry-meta">
              <span class="meta-prep meta-prep-author">Posted on</span> 
              <a href="<?php echo get_permalink(); ?>" title="<?php the_time( 'g:i a' ); ?>" rel="bookmark">
              <span class="entry-date"><?php the_time( 'F j, Y' ); ?></span></a>
            </div><!-- .entry-meta -->

            <div class="entry-summary">
              <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
          </div>

        <?php endwhile; ?>
      <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #container -->

<?php 
$id = get_the_ID();
$posts = get_field('obstacles',$term);

if( $posts ): ?>
	<h2>Obstacles im Park:</h2>
    <ul>
    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
	
<?php  
get_footer(); 

?>
