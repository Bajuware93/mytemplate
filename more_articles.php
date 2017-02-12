<?php

namespace Timo;

class MoreArticles{
	
	public static function init(){
		self::get_post_tags();
	}
	
	private function get_post_tags(){
		
		$post = get_post();
		$post_id = $post->ID;
		
		return $post_id;
		
		
	}
	
	public function get_articles(){
		
		$tags = self::get_post_tags();
		
		foreach( $tags as $value ){
			
			echo $value;
		}
		
	}
	
}


?>