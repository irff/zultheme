<nav class="topbar">
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
			<li><a href="<?php echo esc_url(home_url('/dukung')); ?>">Dukung</a></li>
			<li><a href="<?php echo esc_url(home_url('/kontak')); ?>">Kontak</a></li>
		</ul>		
	</div>
</nav>
<div class="topbar-mobile">
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