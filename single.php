<?php get_header(); ?>
<div class="wrap">
<div id="primary">
<main>
<?php while ( have_posts() ) : the_post();
	get_template_part('page/content');
	get_template_part('page/post-navigation');
endwhile;
	get_template_part('page/content-related'); ?>
</main>
</div><!-- #primary -->
<?php get_sidebar(); ?> <!-- サイドバー -->
</div><!-- .wrap -->
<?php get_footer(); ?>