<div id="header-main">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-2">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">Chan Chan</a>
				</div>
			</div>

			<div class="col-10 d-flex">
					<?php wp_nav_menu( array(
						'theme_location'  => 'Primary',
						'menu_class'				=>		'menu d-flex align-items-center w-100',
					) ); ?>
			</div>

		</div>


	</div>

</div>