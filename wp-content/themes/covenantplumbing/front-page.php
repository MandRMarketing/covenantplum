<?php
/**
 * The Home Page
 */

get_header(); ?>

<main id="primary-wrap" class="primary-content" role="main">
	<?php get_template_part( 'template-parts/homepage/hero' ); ?>
	
	<div class="primary-content__modules">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'template-parts/advanced-layout' ); ?>
		<?php endwhile; endif; ?>
	</div>
</main>

<?php get_footer(); ?>