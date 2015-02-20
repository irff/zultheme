
	<div class="footer">
		<div class="row">
			<div class="large-4 medium-4 columns logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/zul_logo.png" alt="">
			</div>
			<div class="large-4 medium-4 columns issues">
				<h4>Perjuangan Zul</h4>
				<ul>
					<li><a href="<?php echo esc_url(home_url('/persatuan')); ?>">Persatuan</a></li>
					<li><a href="<?php echo esc_url(home_url('/reformasi')); ?>">Reformasi</a></li>
					<li><a href="<?php echo esc_url(home_url('/pluralitas')); ?>">Pluralitas</a></li>
				</ul>
			</div>
			<div class="large-4 medium-4 columns social">
				<h4>Media Sosial</h4>
				<ul>
					<li><a href="https://www.facebook.com/pages/Zulkifli-Hasan/1547369918837496"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-icon.svg" alt=""></a></li>
					<li><a href="https://twitter.com/ZUL_Hasan"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter-icon.svg" alt=""></a></li>
					<li><a href="https://plus.google.com/108550131107533916311/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/google-icon.svg" alt=""></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin-icon.svg" alt=""></a></li>
					<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram-icon.svg" alt=""></a></li>
				</ul>
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