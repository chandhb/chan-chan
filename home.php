<?php get_header(); ?>

	<div class="main-content">
		
		<div class="container">
			
			<div class="row">
				
				<?php 

					if ( have_posts() ) {

						while ( have_posts() ) {

							the_post();

							?>

								<div class="col-md-4">
									
									<div class="card">
										<div class="card-header">
											<div class="mac-action">
												<div class="m-close"></div>
												<div class="m-minimize"></div>
												<div class="m-expand"></div>
											</div>
										</div>
										<img class="card-img-top" src="<?php  ?>" />
										<div class="card-body">
											<h5 class="card-title"><?php the_title(); ?></h5>
										    <p class="card-text"><?php the_excerpt(); ?></p>
										    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read Post</a>
										</div>
									</div>

								</div>

							<?php 

						}

					}

				?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>