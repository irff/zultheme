<?php
/*
Template Name: Galeri
*/
?>

<?php get_header(); ?>


<div class="header galeri">
	<div class="row">
		<div class="large-12 columns">
			<div class="title">		
				<h1>Galeri</h1>
			</div>			
		</div>
	</div>
</div>

<?php include('navigation.php'); ?>

<!-- 
<nav class="galeri">
	<div class="row">
		<div class="large-12 columns">
			<ul>
				<li>Foto</li>
				<li>Video</li>
				<li>Media</li>
				<li>Rilis</li>
			</ul>
		</div>
	</div>	
</nav>
 -->

<div class="galeri thumbs">
	<div class="row">
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/1.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/2.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/3.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/4.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/5.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/6.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/7.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/8.jpg" alt="">
				</figure>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeri/9.jpg" alt="">
				</figure>
			</div>
		</div>
	</div>
	<div class="lainnya">
		<a href="" class="button">Lainnya</a>
	</div>
</div>

<?php get_footer(); ?>
