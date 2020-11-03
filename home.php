<?php get_header(); ?>

	<?php 

		if ( have_posts() ) {

			while ( have_posts() ) {

				the_post();

				?>

				<div>
					<?php echo get_the_title(); ?>
				</div>

				<?php 

			}

		}

	 ?>

<?php get_footer(); ?>