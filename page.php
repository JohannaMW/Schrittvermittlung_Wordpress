<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
	<!-- MAIN CONTENT -->
		<div class="row">
			<div class="image" style="margin: 0; padding:0">
					<img src="http://localhost/wordpress/wp-content/themes/schrittvermittlung/images/image-content.png">
			</div> <!-- end span4 -->
			<div class="text" style="margin: 0; padding:0">
					<img src="http://localhost/wordpress/wp-content/themes/schrittvermittlung/images/image-background.png">
					<div class="articles">
						<article>
							<header>
								<p class="article-meta-categories"><a href="#">Description</a></p>
								<h1><a href="index.html"><?php the_title(); ?></a></h1>
							</header> <!-- end article header -->
							<p>
							<?php the_content(); ?>
							</p>
						</article>
					</div> <!-- end article -->
			</div> <!-- end span8 -->
		</div> <!-- end row -->
	<?php endwhile; ?>
<?php get_footer(); ?>