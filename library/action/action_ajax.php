<?php
add_action( 'wp_ajax_nopriv_serversidefunction', 'serversidefunction' );
add_action( 'wp_ajax_serversidefunction', 'serversidefunction' );
 
function serversidefunction() {
    if ( isset($_REQUEST) ) {   // $_REQUEST is having all the data sent using ajax
        $post_type= $_REQUEST['post_type'];
 
		$sunil_args = array( 'post_type'  => $post_type); 
		$sunil_query = new WP_Query( $sunil_args );
        
		if ( $sunil_query->have_posts() ) {
			while ( $sunil_query->have_posts() ) {
				$sunil_query->the_post();?>
				<p><?php echo the_title();?></p><?php
			}
		}
 
	}
die();
}


add_action( 'wp_ajax_nopriv_server_req', 'server_req' );
add_action( 'wp_ajax_server_req', 'server_req' );
 
function server_req() {
    if ( isset($_REQUEST) ) {   // $_REQUEST is having all the data sent using ajax
        $name= $_REQUEST['reg_name'];
		$mail= $_REQUEST['reg_mail'];
		$pw= $_REQUEST['reg_pw'];
 
		echo $name;
		echo $mail;
		echo $pw;
		
		$user_id = username_exists( $name );
		if ( !$user_id and email_exists($mail) == false ) {
		$user_id = wp_create_user( $name, $pw, $mail );
		echo "User wurde erfolgreich angelegt";
		} else {
		echo "User existiert bereits";
		}
die();
}
}