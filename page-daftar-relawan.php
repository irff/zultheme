<?php
/*
Template Name: Daftar Relawan
*/
?>

<?php get_header(); ?>

<section class="daftar-relawan-full">
	<div class="row">
		<div class="large-6 medium-6 small-12 columns">
			<h1><em>Lupakan perbedaan, satukan tujuan. Saatnya kita mulai politik kebangsaan.</em></h1>
			<h2><strong><em>Daftar menjadi Relawan Zulkifli Hasan</em></strong></h2>
			<?php /* Start loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="daftar-relawan">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End the loop ?>
		</div>		
		<div class="large-6 medium-6 small-12 columns">
			&nbsp;
		</div>
	</div>
</section>

<nav class="daftar-relawan"> 
	<div class="large-5 medium-5 columns">
		<ul class="left-nav">
			<li><a href="<?php echo esc_url(home_url('/profil')); ?>">Profil</a></li>
			<li><a href="<?php echo esc_url(home_url('/berita')); ?>">Berita</a></li>
			<li><a href="<?php echo esc_url(home_url('/galeri')); ?>">Galeri</a></li>			
		</ul>
	</div>
	<div class="large-2 medium-2 columns">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zul_logo.png" alt=""></a>
	</div>
	<div class="large-5 medium-5 columns">
		<ul class="right-nav">
			<li><a href="<?php echo esc_url(home_url('/kalender')); ?>">Kalender</a></li>
			<li><a href="<?php echo esc_url(home_url('/dukung')); ?>">Dukung Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/kontak')); ?>">Kontak</a></li>
		</ul>		
	</div>
</nav>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/latest.css">

<?php include('analyticstracking.php'); ?>

</body>
</html>