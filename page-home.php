<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="full-background">
	<div class="row">
		<div class="large-6 columns">
			<h1><em>Lupakan perbedaan, satukan tujuan. Saatnya kita mulai politik kebangsaan.</em></h1>
			<h2><strong><em>Mari bergabung!</em></strong></h2>
			<div class="mailchimp">
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<form action="//langgar.us10.list-manage.com/subscribe/post?u=d3154a05de067b1349804592a&amp;id=af2efb6680" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Alamat Email">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="display: none;"><input type="text" name="b_d3154a05de067b1349804592a_af2efb6680" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Bergabung" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					    </div>
					</form>
				</div>

				<!--End mc_embed_signup-->
			</div>
		</div>		
	</div>
		<div class="large-6 columns">
			&nbsp;
		</div>
</section>

<nav class="topbar">
	<div class="large-5 columns">
		<ul class="left-nav">
			<li>Profil</li>
			<li>Berita</li>
			<li>Galeri</li>			
		</ul>
	</div>
	<div class="large-2 columns"><?php get_header(); ?>

			<img src="<?php echo get_template_directory_uri(); ?>/img/zul_logo.png" alt=""></li>
	</div>
	<div class="large-5 columns">
		<ul class="right-nav">
			<li>Kalender Kegiatan</li>
			<li>Dukung Zul</li>
			<li>Kontak</li>
		</ul>		
	</div>
</nav>

<div class="header berita">
	<div class="row">
		<div class="large-12 columns">
			<div class="title">		
				<h1>Berita Terbaru</h1>
			</div>			
		</div>
	</div>
</div>

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

<div class="berita thumbs">
	<div class="row" data-equalizer>
		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/news_thumb_1.jpg" alt="">
					<figcaption>
						<h3>Ketua MPR: Kisruh di DPR Selesai Dalam Dua Pekan Kedepan</h3>					
					</figcaption>
				</figure>				
			</div>
		</div>
		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/news_thumb_2.jpg" alt="">
					<figcaption>
						<h3>Menhut Buka Pameran "The 6th IndoGreen Forestry Expo 2014"</h3>					
					</figcaption>
				</figure>				
			</div>

		</div>
		<div class="large-4 columns">
			<div class="entry" data-equalizer-watch>
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/img/news_thumb_3.jpg" alt="">
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

<div class="home-video">
	&nbsp;
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
		'meta_wrap_open'		=> '<span class="meta">',
		'meta_wrap_close'		=> '</span>'
	));
	$tweet = $TweetPHP->get_tweet_list();
?>

<div class="twitter">
	<?php echo $tweet; ?>
</div>

<?php get_footer(); ?>
