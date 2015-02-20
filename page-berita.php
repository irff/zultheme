<?php
/*
Template Name: Berita
*/
?>

<?php get_header(); ?>


<div class="header berita">
	<div class="row">
		<div class="large-12 columns">
			<div class="title">	
				<h1>Berita Terbaru</h1>
			</div>			
		</div>
	</div>
</div>

<?php include('navigation.php'); ?>


<div class="berita thumbs">
		<?php
		$counter = 0;
		$args = Array('category_name' => 'berita',
					  'posts_per_page' => 999);

		$lastposts = get_posts($args);
		foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
			
			<?php if($counter % 3 == 0): ?>
				<div class="row" data-equalizer>
			<?php endif; ?>
			
			<div class="large-4 medium-4 columns">
				<div class="entry" data-equalizer-watch>
					<figure>
					<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' )[0]; ?>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image; ?>" alt=""></a>
						<figcaption>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</figcaption>
					</figure>				
				</div>
			</div>
			<?php if($counter % 3 == 2): ?>
				</div>
			<?php endif; ?>
		<?php
		$counter++;
		endforeach; 
		wp_reset_postdata(); ?>

		<?php if($counter % 3 == 1): ?>
				<div class="large-4 medium-4 columns">
					&nbsp;
				</div>
				<div class="large-4 medium-4 columns">
					&nbsp;
				</div>
			</div>
		<?php endif; ?>

		<?php if($counter % 3 == 2): ?>
				<div class="large-4 medium-4 columns">
					&nbsp;
				</div>
			</div>
		<?php endif; ?>
	
	<!-- 
	<div class="selengkapnya">
		<a href="" class="button">Selengkapnya</a>	
	</div>
 	-->
</div>

<?php get_footer(); ?>

