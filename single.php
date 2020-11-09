<?php get_header() ?>

	<main class="single-design">
		
		<div class="container">
			
			<div class="row single-post-content">
				
				<h1><?php the_title( $before = '', $after = '', $echo = true ) ?></h1>

				<div class="content">
					<?php the_content(); ?>
				</div>

			</div>

		</div>

	</main>

	

<?php get_footer() ?>