<div id="kommentar_formular">
 
 <?php 
	$post_id = get_the_ID();	
	$cat = get_the_terms($post_id,'category');
	$tax = get_the_category($post_id);
 
 foreach ($cat as $category)
 {
	 echo 'Term Name: '.$category->name;
 }
 
 $taxonomies = get_taxonomies(); 
 foreach ( $taxonomies as $taxonomy ) 
 {
    echo '<p>' . $taxonomy . '</p>';
 }
 
 
 ?>
 
<h3 id="respond">Kommentar schreiben</h3>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<!-- 	Kommentare werden in die Datei wp-comments-post.php geschrieben 
		get_option('siteurl') gibt dir URL der Datei an. Beide lassen -->

   <p>
      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />  
      <label for="author">Name</label>
	  
	<!-- value echo $comment_author; speichert den Namen, falls der Kommentator schonmal etwas eingetragen hat -->

	  
   </p>
 
   <p>
      <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
      <label for="email">Email <small>(wird nicht veröffentlicht)</small></label>
   </p>
 
   <p>
      <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
      <label for="url">Webseite</label>
   </p>
 
   <p>
      Kommentar
      <textarea name="comment" id="comment" style="width: 100%;" rows="10" tabindex="4"></textarea>
   </p>
 
   <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar abschicken" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>
 
   <?php do_action('comment_form', $post->ID); ?>
 
</form>
 
</div> <!-- kommentar_formular -->
 
<div id="kommentare">
   <?php foreach ($comments as $comment) : 
   
   /*Kommentar Loop. Jeder Kommentar erhält seine eigene div="comment" */
   
   ?>
 
      <div class="comment" id="comment-<?php comment_ID() ?>">
 
        <b><small class="commentmetadata"><?php comment_author_link() ?> <strong>|</strong> am <?php comment_date('j. F Y') ?> um <?php comment_time('H:i') ?> Uhr</small></b>
 
         <?php comment_text() ?>
          <?php if ($comment->comment_approved == '0') : ?>
            <strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
         <?php endif; ?>
 
      </div>
   <?php endforeach; /* end for each comment */ ?>
</div><!-- kommentare -->