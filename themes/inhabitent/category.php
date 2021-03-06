<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area journals">
	<main id="main" class="site-main" role="main">
	<header class="page-header">
		<h1 class="page-title">Category: <?php single_tag_title(); ?></h1>			
	</header>
	<?php if (have_posts()) : ?>
			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
				get_template_part('template-parts/content');
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>