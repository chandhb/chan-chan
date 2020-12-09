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

	<?php 

		global $post;
		$taxonomies = get_taxonomies('','names');
		
		$taxonomy = 'category';
		$term = get_the_terms( $post->ID, $taxonomy );
		$term_ID = $term[0]->term_id;

		echo '<pre>';
		print_r($term);
		echo '</pre>';

		// Query args 
		$args = array(
			'post_type'			=>		'post',
			'tax_query'			=>		array(
				'taxonomy'		=>		$taxonomy,
				'field'			=>		'id',
				'terms'			=>		array( $term_ID ),
				'operator'		=>		'IN',
			),
			'post__not_in'		=>		array($post->ID),
		);

		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post();
			the_title();
		endwhile;
		endif;

		// Reset Post Data
		wp_reset_postdata();

	 ?>

	

<?php get_footer() ?>