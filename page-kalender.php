<?php
/*
Template Name: Kalender
*/
?>

<?php get_header(); ?>

<div class="header undang">
	<div class="row">
		<div class="large-12 columns">
			<div class="title">		
				<h1>Kalender</h1>
			</div>			
		</div>
	</div>
</div>

<nav class="topbar">
	<div class="large-5 columns">
		<ul class="left-nav">
			<li>Profil</li>
			<li>Berita</li>
			<li>Galeri</li>			
		</ul>
	</div>
	<div class="large-2 columns">
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

<div class="kalender">
	<div class="row">
		<div class="large-12 columns">
			<h2>Jadwal Zulkifli Hasan</h2>
			<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=4httrq9rp6ek2h6g1k9mtdc410%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=Asia%2FJakarta" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
</div>

<?php get_footer(); ?>
