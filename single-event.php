<?php get_header(); ?>

<div class="text" style="margin: 0; padding:0">
	<img src="http://localhost/wordpress/wp-content/themes/schrittvermittlung/images/image-background.png">
	<div class="articles">
		<img class="image" src="http://localhost/wordpress/wp-content/themes/schrittvermittlung/images/image-content.png">
	</div>
	<div id="primary">
		<div id="content" role="main">
			<?php
				global $post;
				$EM_Event = em_get_event($post->ID, 'post_id');
			?>

			<header class="entry-header">
			<h1><?php echo $EM_Event->output('#_EVENTNAME'); ?></h1>
			<p><?php echo $EM_Event->output('#_EVENTDATES'); ?>, <?php echo $EM_Event->output('#_24HSTARTTIME'); ?></p>
			</header>

			<div class="entry-content">
			<p><?php echo $EM_Event->output('#_EVENTNOTES'); ?></p>
			</div>

			<div class="booking-form">
			<p><?php echo $EM_Event->output('#_BOOKINGFORM'); ?></p>
			<p><?php echo $EM_Event->output('#_BOOKINGBUTTON'); ?></p>
			</div>

			<p> Es sind noch <?php echo $EM_Event->output('#_AVAILABLESPACES'); ?> Plätze frei! </p>


		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>

