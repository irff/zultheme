<?php
/*
Template Name: Page Standard
*/
?>

<?php get_header(); ?>


<div class="header berita">
	<div class="row">
		<div class="large-12 columns">
			<div class="title">		
				<h1>Kontak</h1>
			</div>			
		</div>
	</div>
</div>

<?php include('navigation.php'); ?>

<div class="profil">
	<div class="row">
		<div class="large-12 medium-12" id="content" role="main">
			<article>
				<?php /* Start loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
				<?php the_content(); ?>
				<?php endwhile; // End the loop ?>
			</article>
		</div>
	</div>
</div>

<?php get_footer(); ?>