<nav class="topbar">
	<div class="large-5 columns">
		<ul class="left-nav">
			<li><a href="<?php echo esc_url(home_url('/profil')); ?>">Profil</a></li>
			<li><a href="<?php echo esc_url(home_url('/berita')); ?>">Berita</a></li>
			<li><a href="<?php echo esc_url(home_url('/galeri')); ?>">Galeri</a></li>			
		</ul>
	</div>
	<div class="large-2 columns">
			<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/zul_logo.png" alt=""></a>
	</div>
	<div class="large-5 columns">
		<ul class="right-nav">
			<li><a href="<?php echo esc_url(home_url('/kalender')); ?>">Kalender Kegiatan</a></li>
			<li><a href="<?php echo esc_url(home_url('/dukung')); ?>">Dukung Zul</a></li>
			<li><a href="<?php echo esc_url(home_url('/kontak')); ?>">Kontak</a></li>
		</ul>		
	</div>
</nav>