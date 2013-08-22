=== Slider Pagination Concept for WordPress ===
Contributors: WebPurine
Donate link: 
Tags: Pagenation
Requires at least: 3.6
Tested up to: 3.6
Stable tag: 0.7.1.0

スマートフォンに最適化されたページネーション

== Description ==
横並びのページネーションでは、表示が崩れる場合がある。
そこで、(http://tympanus.net/codrops/2012/12/21/slider-pagination-concept/ "Slider Pagination Concept") を参考にスマートフォンに最適なページネーションを作ってみました。

すばらしい jQuery plugins 作者の (http://tympanus.net/ "Mary Lou") に感謝します。

== Installation ==
1. `slider-pagination-concept-for-wordpress` フォルダーを `/wp-content/plugins/` アップロード。
2. プラグインメニューより有効化。
3. アーカイブ系のテンプレートに以下を追加

`<?php if ( function_exists( 'spcfwp' ) ) spcfwp::spcfwp_page_navi(); ?>`

== Changelog ==

**0.7.1.0 - August 21, 2013**  
Initial release.