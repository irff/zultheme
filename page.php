<?php
/*
Template Name: Page Standard
*/
?>

<?php get_header(); ?>

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>

	<div class="header berita">
		<div class="row">
			<div class="large-12 columns">
				<div class="title">		
					<h1><?php the_title(); ?></h1>
				</div>			
			</div>
		</div>
	</div>

	<?php include('navigation.php'); ?>

	<div class="profil">
		<div class="row">
			<div class="large-12 medium-12" role="main">
				<article>
					<header>
						<h2><?php the_title(); ?></h2>
					</header>
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</div>
<?php endwhile; // End the loop ?>

<?php get_footer(); ?>