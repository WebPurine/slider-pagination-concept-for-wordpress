<?php
/*
Plugin Name: Slider Pagination Concept for WordPress
Plugin URI: https://github.com/WebPurine/slider-pagination-concept-for-wordpress
Description: Smartphone site for pagination
Author: Webnist
Version: 0.7.1.0
Author URI: http://web-purine.com/
Text Domain: spcfwp
Domain Path: /languages/
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

class spcfwp {

	function __construct(){
		add_action('wp_enqueue_scripts', array(&$this,'enqueue_scripts'));
		add_action('wp_footer', array(&$this,'footer_scripts'), 99);
	}

	public function enqueue_scripts(){
		wp_enqueue_script('jquery-ui-slider');
		wp_enqueue_script('jquery-touch-punch');
		wp_enqueue_script('jquery.pagination', plugins_url( '', __FILE__ ) . '/js/jquery.pagination.js', array(), '', true );
		wp_enqueue_script('modernizr-custom', plugins_url( '', __FILE__ ) . '/js/modernizr.custom.63321.js', array(), '', true );

		wp_enqueue_style( 'wp-jquery-ui-dialog' );
		wp_enqueue_style( 'style-style', plugins_url( '', __FILE__ ) . '/css/style.css' );
	}

	public function footer_scripts() {
		global $wp_query;
		$max_page = $wp_query->max_num_pages;
		$paged = isset( $wp_query->query['paged'] ) ? $wp_query->query['paged'] : 1;
		$replaced = 'MeAO^2*EDMfhHh^U&Oel9v';
		$link = next_posts(0,false);
		if ( get_option( 'permalink_structure' ) )
			$link = preg_replace("/\/page\/([0-9]+)/", '/page/' . $replaced, $link );
		else
			$link = preg_replace("/paged=([0-9]+)/", 'paged=' . $replaced, $link );

		if ( $max_page == 1 )
			return;

		$output = <<<EOT
			<script>
			jQuery(document).ready(function($) {

				$( "#spcfwp-pagination" ).pagination( {
					value : {$paged},
					total : {$max_page},
					onChange : function( value ) {
						var link = $('<b>{$link}</b>').text().replace('{$replaced}',value);
						location.href = link;
					}
				} );
			});
		</script>
EOT;
		echo $output;
	}

	public function spcfwp_page_navi() {
		echo self::get_spcfwp_page_navi();
	}
	public function get_spcfwp_page_navi() {
		global $wp_query;
		$max_page = $wp_query->max_num_pages;
		if ( get_previous_posts_link() )
			$previous = '<a href="' . previous_posts(false) . '" class="spcfwp-prev">Previous</a>';

		if ( get_next_posts_link() )
			$next = '<a href="' . next_posts($max_page,false) . '" class="spcfwp-next">Next</a>';

		if ( $max_page == 1 )
			return;

		$output = <<<EOT
				<div id="spcfwp-pagination" class="spcfwp-slider-wrapper">
					<nav>
						{$previous}
						{$next}
					</nav>
				</div>
EOT;
		return $output;
	}
}

new spcfwp();
