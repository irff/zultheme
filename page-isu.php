<?php
/*
Template Name: Page Isu
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
			<div class="large-12 medium-12 content column" role="main">
				<article>
					<div class="nav-isu">
						<div class="row">
							<div class="large-4 medium-4 column">
								<a href="<?php echo esc_url(home_url('/persatuan')); ?>" class="button isu zul-branding">Persatuan</a>
							</div>
							<div class="large-4 medium-4 column">
								<a href="<?php echo esc_url(home_url('/reformasi')); ?>" class="button isu zul-branding">Reformasi</a>
							</div>
							<div class="large-4 medium-4 column">
								<a href="<?php echo esc_url(home_url('/pluralitas')); ?>" class="button isu zul-branding">Pluralitas</a>
							</div>
						</div>
					</div>
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