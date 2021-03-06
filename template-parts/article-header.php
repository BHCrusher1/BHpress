<?php
/**
 * 各記事のヘッダ（タイトル・投稿日・更新日・カテゴリ）の部分
 */

?>
<header class="container-fluid bg-primary text-white entry-header">
	<?php
	if ( is_single() || is_page() ) { // 個別ページの場合
		the_title( '<h1 class="d-inline-block h2 text-white entry-title">', '</h1>' );
	} elseif ( is_front_page() && is_home() ) { // トップページ（ホームとフロントページ）の場合
		the_title( '<h3 class="d-inline-block h2 entry-title"><a class="text-white" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
	} else { // それ以外
		the_title( '<h2 class="d-inline-block h2 entry-title"><a class="text-white" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}
	if ( ! is_page() ) : // 固定ページを表示していない場合
		?>
		<div class="d-inline-block mb-2 entry-meta">
			<time class="mr-2 post-date" datetime="<?php the_date( 'c' ); ?>">&#x1F199;<?php echo get_the_date(); ?></time>
			<?php
			if ( get_the_date() != get_the_modified_date() ) : // 公開日と最終更新日が一致しない場合のみ最終更新日を表示
				?>
				<time class="mr-2 modified-date" datetime="<?php the_modified_time( 'c' ); ?>">&#x1F504;<?php echo the_modified_date(); ?></time>
			<?php endif; ?>
			<span class="cat-links">&#x1F4C1;：<?php the_category( ', ' ); ?></span>
		</div> <!-- .entry-meta -->
	<?php endif; ?>
</header>
