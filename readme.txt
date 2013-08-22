=== Slider Pagination Concept for WordPress ===
Contributors: WebPurine
Donate link: 
Tags: Pagenation
Requires at least: 3.6
Tested up to: 3.6
Stable tag: 0.7.1.0

Pagination optimized for smartphones

== Description ==
The pagination of side-by-side, there is a case where the display is broken.
So, I tried to make the best smartphone to pagination in reference to (http://tympanus.net/codrops/2012/12/21/slider-pagination-concept/ "Slider Pagination Concept").

Cool jQuery plugins authors (http://tympanus.net/ "Mary Lou") to thank.


== Installation ==
1. Upload the entire `slider-pagination-concept-for-wordpress` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Add the following to the archiving systems templates

`<?php if ( function_exists( 'spcfwp' ) ) spcfwp::spcfwp_page_navi(); ?>`

== Changelog ==

**0.7.1.0 - August 21, 2013**  
Initial release.