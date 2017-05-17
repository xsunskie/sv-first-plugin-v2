<?php 
get_header();
the_post(); ?>
	<div id="primary" class="content-area">
	
		<div id="content" class="site-content" role="main">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
			<?php the_content(); ?>
			</div>
		</div><!--site-content -->
	</div><!--content-area -->
<?php 
	get_sidebar(); 
	get_footer(); 
?>
