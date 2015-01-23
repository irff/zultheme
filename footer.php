	<?php
		require_once('tweet-php-master/TweetPHP.php');

		$TweetPHP = new TweetPHP(array(
			'consumer_key'          => 'GRIbTsuGnVZADvzu0KKR1DjM1',
			'consumer_secret'       => '5Yx5ZmKJrwBlPFFyGVDhhcBn6QICQpz1fx7ASl0vX2xCc38b1U',
			'access_token'          => '187520592-9p8QluoU2EapHVjOMJIgJ2MeWL9YuZkrwhGOUmx4',
			'access_token_secret'   => 'RQzDMz3BhGCpN8hHDDMrvdNCKKUoCGhC6SeKxTarPtfIJ',
			'twitter_screen_name'   => 'ZUL_Hasan',
			'tweets_to_display'		=> 1,
			'tweet_wrap_open'		=> '<h6>"',
			'tweet_wrap_close'		=> '"</h6>',
			'meta_wrap_open'		=> '<span class="meta"><em>',
			'meta_wrap_close'		=> '</em></span>'
		));
		$tweet = $TweetPHP->get_tweet_list();
	?>

	<div class="footer">
		<div class="row">
			<div class="large-4 medium-4 columns">
				<h4>Isu Kita</h4>
				<ul>
					<li>Penyelesaian Reformasi</li>
					<li>SARA dan HAM</li>
				</ul>
			</div>
			<div class="large-4 medium-4 columns">
				<h4>Tweet Zul</h4>
				<blockquote><?php echo $tweet; ?></blockquote>
			</div>
			<div class="large-4 medium-4 columns">
				<h2><strong>kebangsaan.org</strong></h2>
			</div>
		</div>
	</div>


	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/latest.css">
	<?php wp_footer(); ?>

	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.equalizer.js"></script>

	<script>
		jQuery(document).foundation();
		console.log('texs');
	</script>
	
</body>
</html>