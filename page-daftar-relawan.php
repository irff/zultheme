<?php
/*
Template Name: Daftar Relawan
*/
?>

<?php get_header(); ?>

<section class="full-background daftar-relawan">
	<div class="row">
		<div class="large-6 medium-6 columns">
			<h1><em>Lupakan perbedaan, satukan tujuan. Saatnya kita mulai politik kebangsaan.</em></h1>
			<h2><strong><em>Daftar menjadi Relawan Zulkifli Hasan</em></strong></h2>
			<?php /* Start loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="daftar-relawan">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // End the loop ?>
		</div>		
		<div class="large-6 medium-6 columns">
			&nbsp;
		</div>
	</div>
</section>
<nav class="topbar daftar-relawan">
	<div class="large-12 medium-6 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/img/zul_logo.png" alt=""></li>
	</div>
</nav>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/latest.css">
