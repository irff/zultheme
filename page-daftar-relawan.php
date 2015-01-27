<?php
/*
Template Name: Daftar Relawan
*/
?>

<?php get_header(); ?>

<section class="daftar-relawan-full">
	<div id="slides">
		<div class="row">
			<div class="large-6 medium-6 small-12 columns daftar-headline">
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
		<ul class="slides-container">
			<li>
				<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home_slider_1.jpg');" class="full-screen-image">
				</div>
			</li>
			<li>
				<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home_slider_2.jpg');" class="full-screen-image">
				</div>
			</li>
		</ul>
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

<div class="topbar-mobile relawan">
  <nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name"> </li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>
		<ul class="dropdown">
			<li><a href="<?php echo esc_url(home_url('/profil')); ?>">Profil</a></li>
			<li><a href="<?php echo esc_url(home_url('/berita')); ?>">Berita</a></li>
			<li><a href="<?php echo esc_url(home_url('/galeri')); ?>">Galeri</a></li>			
			<li><a href="<?php echo esc_url(home_url('/kalender')); ?>">Kalender</a></li>
			<li><a href="<?php echo esc_url(home_url('/dukung')); ?>">Dukung</a></li>
			<li><a href="<?php echo esc_url(home_url('/kontak')); ?>">Kontak</a></li>
		</ul>
  </nav>
</div>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/superslides.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/latest.css">

	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.min.js"></script>

	<script>
		jQuery('#slides').superslides({
	    	animation: 'fade',
	    	pagination: false,
	    	play: 7000
	   	});
	</script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.equalizer.js"></script>
	
	<script>
		jQuery(document).foundation();
		console.log('texs');
	</script>

	<?php include('analyticstracking.php'); ?>
</body>
</html>