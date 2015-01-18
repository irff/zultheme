<?php
/*
Template Name: Undang
*/
?>

<?php
	error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors', 'On');
?>

<?php include_once('form-undang.php'); ?>

<?php get_header(); ?>


<div class="header undang">
	<div class="row">
		<div class="large-12 columns">
			<div class="title">		
				<h1>Undang Zul</h1>
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

<div class="form-undang">
	<h2>Undang Zulkifli Hasan untuk Hadir di Konferensi/Seminar Anda</h2>
	<p>Isikan data lengkap acara anda di kolom berikut</p>

      <?php while ( have_posts() ) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
              <?php the_content(); ?>

              <style type="text/css">
                .error{
                  padding: 5px 9px;
                  border: 1px solid red;
                  color: red;
                  border-radius: 3px;
                }

                .success{
                  padding: 5px 9px;
                  border: 1px solid green;
                  color: green;
                  border-radius: 3px;
                }

                form span{
                  color: red;
                }
              </style>

              <div id="respond">
                <form action="<?php the_permalink(); ?>" method="post">
                  <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" ></label></p>

                  <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email"></label></p>

                  <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"></textarea></label></p>

                  <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>

                  <input type="hidden" name="submitted" value="1">
                  <p><input type="submit"></p>
                </form>
              </div>


            </div><!-- .entry-content -->

          </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>
