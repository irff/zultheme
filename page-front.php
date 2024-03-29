<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<section class="daftar-relawan-full">
	<div id="slides">
		<ul class="slides-container">
			<li>
				<div class="row">
					<div class="large-6 medium-6 small-12 columns daftar-headline">
						<h2><em>&ldquo;Oleh karena itu, kebijakan pertama kami, biar ga repot-repot, tidak terjadi pertentangan, sudah, hutan yang bagus, yang masih primer, kasih moratorium, TIDAK BOLEH ADA IZIN APAPUN DI SITU. TITIK.&rdquo;</em></h2>
						<a href="<?php echo esc_url(home_url('/persatuan')); ?>" class="button medium zul-branding">Saya setuju!</a>
					</div>
				</div>
				<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home_slider_1.jpg');" class="full-screen-image">
				</div>
			</li>
			<li>
				<div class="row">
					<div class="large-6 medium-6 small-12 columns daftar-headline">
						<h2><em>&ldquo;Saya menyampaikan untuk membangun tradisi baru untuk partai politik di tanah air. Bahwa parpol haruslah melaksanakan politik kebangsaan. Tidak hanya politik praktis.&rdquo;</em></h2>
						<a href="<?php echo esc_url(home_url('/reformasi')); ?>" class="button medium zul-branding">Saya setuju!</a>
					</div>		
				</div>

				<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home_slider_2.jpg');" class="full-screen-image">
				</div>
			</li>
			<li>
				<div class="row">
					<div class="large-6 medium-6 small-12 columns daftar-headline">
						<h2><em>&ldquo;Saya memprotes keras kalau ada yang protes Ahok soal dia Tionghoa atau agamanya. Kalau mau kritik silakan, tapi jangan soal SARA. Kita ini kan Bhinneka Tunggal Ika.&rdquo;</em></h2>
						<a href="<?php echo esc_url(home_url('/pluralitas')); ?>" class="button medium zul-branding">Saya setuju!</a>
					</div>		
				</div>

				<div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home_slider_3.jpg');" class="full-screen-image">
				</div>
			</li>
		</ul>
	</div>
</section>

<nav class="daftar-relawan"> 
	<div class="large-5 medium-5 columns">
		<ul class="left-nav">
			<li><a href="<?php echo esc_url(home_url('/kenal-zul')); ?>">Kenal Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/berita')); ?>">Berita Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/persatuan')); ?>">Perjuangan Zul</a></li>			
		</ul>
	</div>
	<div class="large-2 medium-2 columns">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zul_logo.png" alt=""></a>
	</div>
	<div class="large-5 medium-5 columns">
		<ul class="right-nav">
			<li><a href="<?php echo esc_url(home_url('/media-kit')); ?>">Media Kit</a></li>
			<li><a href="<?php echo esc_url(home_url('/dukung')); ?>">Dukung Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/sapa-zul')); ?>">Sapa Zul</a></li>
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
			<li><a href="<?php echo esc_url(home_url('/kenal-zul')); ?>">Kenal Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/berita')); ?>">Berita Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/persatuan')); ?>">Perjuangan Zul</a></li>			
			<li><a href="<?php echo esc_url(home_url('/media-kit')); ?>">Media Kit</a></li>
			<li><a href="<?php echo esc_url(home_url('/dukung')); ?>">Dukung Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/sapa-zul')); ?>">Sapa Zul</a></li>
		</ul>
  </nav>
</div>

<div class="berita thumbs home">
			<div class="row">
				<div class="large-12 column">
					<header>
						<h2>Berita Terbaru</h2>
					</header>					
				</div>
			</div>
			<div class="berita-slider row" data-equalizer>

				<?php
				$args = Array('posts_per_page' => 9,
							  'orderby' => 'post_date',
							  'order' => 'DESC',
							  'category_name' => 'berita');
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					<div class="">
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
				<?php
				endforeach; 
				wp_reset_postdata(); ?>					
			</div>
			
	<div class="selengkapnya">
		<a href="<?php echo esc_url(home_url('/berita')); ?>" class="button zul-branding">Selengkapnya</a>	
	</div>
</div>

<?php
	require_once('tweet-php-master/TweetPHP.php');

	$TweetPHP = new TweetPHP(array(
		'consumer_key'          => 'GRIbTsuGnVZADvzu0KKR1DjM1',
		'consumer_secret'       => '5Yx5ZmKJrwBlPFFyGVDhhcBn6QICQpz1fx7ASl0vX2xCc38b1U',
		'access_token'          => '187520592-9p8QluoU2EapHVjOMJIgJ2MeWL9YuZkrwhGOUmx4',
		'access_token_secret'   => 'RQzDMz3BhGCpN8hHDDMrvdNCKKUoCGhC6SeKxTarPtfIJ',
		'twitter_screen_name'   => 'ZUL_Hasan',
		'tweets_to_display'		=> 1,
		'tweet_wrap_open'		=> '<h3>"',
		'tweet_wrap_close'		=> '"</h3>',
		'meta_wrap_open'		=> '<span class="meta"><em>',
		'meta_wrap_close'		=> '</em></span>'
	));
	$tweet = $TweetPHP->get_tweet_list();
?>

<div class="twitter">
	<?php echo $tweet; ?>
	<div class="row">
		<div class="large-12 column">
			<h5 class="tweet-author">Latest tweet <a href="http://twitter.com/ZUL_Hasan">@ZUL_Hasan</a></h5>			
		</div>
	</div>
</div>

<div class="video">
	<div class="row">
		<div class="large-12 columns">
			<header>
				<h2>Mengenal Zul</h2>
			</header>
			<div class="video-slider">
				<?php
				$args = Array('posts_per_page' => 100,
							  'orderby' => 'post_date',
							  'order' => 'ASC',
							  'category_name' => 'video');
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
					<div class="item">
						<h5 class="title"><?php the_title(); ?></h5 class="title">
						<div class='embed-container'>
							<?php the_content(); ?>
						</div>
					</div>
				<?php
				endforeach; 
				wp_reset_postdata(); ?>	
			</div>				
		</div>
	</div>
</div>

<div class="testimonial">
	<div class="row">
		<div class="large-12 columns">
			<header>
				<h2>Testimonial Zul</h2>
			</header>
			<div class="testimonial-slider">
				<?php
				$args = Array('posts_per_page' => 100,
							  'orderby' => 'post_date',
							  'order' => 'DESC',
							  'category_name' => 'testimonial');
				$lastposts = get_posts($args);
				foreach ( $lastposts as $post ) : setup_postdata( $post ); ?>
						<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' )[0]; ?>
						<figure class="item">
							<img src="<?php echo $featured_image; ?>" alt="">							
						</figure>
				<?php
				endforeach; 
				wp_reset_postdata(); ?>	

			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/superslides.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl-carousel/owl.theme.default.css">

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.superslides.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

<script>
	jQuery('#slides').superslides({
    	animation: 'fade',
    	pagination: false,
    	play: 7000
   	});
   	jQuery(document).ready(function() {
   		jQuery('.video-slider').owlCarousel({
   			'dots' : false,
   			'nav' : true,
   			'items' : 1
   		});

   		jQuery('.testimonial-slider').owlCarousel({
   			'dots' : false,
   			'nav' : true,
   			'responsive' : {
   				0 : {
   					items: 1
   				},
   				720 : { 
   					items: 2
   				}
   			}
   		});

   		jQuery('.berita-slider').owlCarousel({
   			'loop' : true,
   			'dots' : false,
   			'nav' : true,
   			'autoplay' : true,
   			'autoplayTimeout' : 3000,
   			'responsive' : {
   				0 : {
   					items: 1
   				},
   				720 : { 
   					items: 2
   				},
   				1024 : {
   					items: 3
   				}
   			}
   		});

   	});

</script>

<?php get_footer(); ?>
