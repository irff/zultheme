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

<!-- 
<nav class="berita">
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
 
<div class="berita thumbs">
	<div class="row" data-equalizer>
		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/1.jpg" alt="">
					<figcaption>
						<h3>Ketua MPR: Kisruh di DPR Selesai Dalam Dua Pekan Kedepan</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>

		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/2.jpg" alt="">
					<figcaption>
						<h3>Menhut Buka Pameran "The 6th IndoGreen Forestry Expo 2014"</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/3.jpg" alt="">
					<figcaption>
						<h3>Menhut Terima Tiger Champion Award</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>
	</div>

	<div class="row" data-equalizer>
		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/4.jpg" alt="">
					<figcaption>
						<h3>Ketua MPR: Kisruh di DPR Selesai Dalam Dua Pekan Kedepan</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>

		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/5.jpg" alt="">
					<figcaption>
						<h3>Menhut Buka Pameran "The 6th IndoGreen Forestry Expo 2014"</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>

		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/6.jpg" alt="">
					<figcaption>
						<h3>Menhut Terima Tiger Champion Award</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>
	</div>

	<div class="row" data-equalizer>
		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/7.jpg" alt="">
					<figcaption>
						<h3>Ketua MPR: Kisruh di DPR Selesai Dalam Dua Pekan Kedepan</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>

		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/8.jpg" alt="">
					<figcaption>
						<h3>Menhut Buka Pameran "The 6th IndoGreen Forestry Expo 2014"</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>

		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/berita/9.jpg" alt="">
					<figcaption>
						<h3>Menhut Terima Tiger Champion Award</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>
	</div>
	

	<div class="selengkapnya">
		<a href="" class="button">Selengkapnya</a>	
	</div>
</div>

<?php get_footer(); ?>
