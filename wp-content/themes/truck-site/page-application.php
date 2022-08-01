<?php
/**
*
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header();

?>
<div class="section blog section-xx trucks-front-page-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php if ( have_posts() ) :

						 while ( have_posts() ) : the_post(); 

						   get_template_part( 'template-parts/content-page'); 

							endwhile; 

							else :

						   get_template_part( 'template-parts/content', 'none' ); 

					     endif; ?>

				</div>
			</div>
        </div>
	</div>
</div>
<?php get_footer();?>