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
								<p class="article-meta-categories"><a href="#">
									<div id="breadcrumbs">
									  <a href="<?php echo get_bloginfo('url'); ?>" title="">Home</a>
									  <?php
									    $parent_id  = $post->post_parent;
									    $breadcrumbs = array();
									    while ($parent_id) {
									      $page = get_page($parent_id);
									      $breadcrumbs[] = '<a href="'.get_permalink($page->ID).'" title="">'.get_the_title($page->ID).'</a>';
									      $parent_id  = $page->post_parent;
									    }
									    $breadcrumbs = array_reverse($breadcrumbs);
									    foreach ($breadcrumbs as $crumb) echo ' > '.$crumb;
									  ?>
									  <a href="#" title=""> > <?php the_title(); ?></a>
									</div>
								</a></p>
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