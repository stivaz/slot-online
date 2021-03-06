<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

get_header(); ?>

	<div id="c1_primary" class="c1_content-area">
		<main id="c1_main" class="c1_site-main" role="main">

		<?php
   
        
		if ( have_posts() ) : ?>

			<header class="c1_page-header">
				<?php
					the_archive_title( '<h1 class="c1_page-title">', '</h1>' );
					the_archive_description( '<div class="c1_taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
