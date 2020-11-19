<?php 
// Template Name: API Referrence
get_header();
?>

<?php 
	
	$url = "https://5fb33d34b6601200168f72b8.mockapi.io/api/v1/products";

	$request = wp_remote_get( $url );
	$body = wp_remote_retrieve_body( $request );
	$json = json_decode( $body );

?>

<div class="container">
	
	<div class="row">
		
		<?php 

			foreach ($json as $product) {
				
				$id = $product->id;
				$date_created = $product->createdAt;
				$name = $product->name;
				$thumbnail = $product->avatar;

				?>
					<div class="col-md-4">
						<div class="products">
							<div class="thumb">
								<a href="">
									<img src="<?php echo $thumbnail; ?>">
								</a>
							</div>

							<div class="content">
								<h2><?php echo $name; ?></h2>
							</div>
						</div>
					</div>
				<?php 

			}

		 ?>

	</div>

</div>

<pre>
	<?php print_r($json); ?>
</pre>


<?php get_footer(); ?>