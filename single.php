<?php get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(  ), 'large' )[0]; ?>

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

	<div class="berita">
		<div class="row">
			<div class="large-12 medium-12 content" role="main">
				<article>
					<header>
						<h2><?php the_title(); ?></h2>
						<em><?php reverie_entry_meta(); ?></em>
					</header>
					<img src="<?php echo $featured_image; ?>" class="featured">
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>