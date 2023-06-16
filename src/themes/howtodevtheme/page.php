<?php
get_header();
?>
	<main id="primary" class="site-man">
		<?php
		if(have_posts()) :
			while ( have_posts() ):
				the_post();
				get_template_part('template-parts/content', 'page');
				if(comments_open() || get_comments_number()):
					comments_template();
				endif;
			endwhile;
		endif;
		?>
	</main><!--    #main-->
<?php
get_footer();
?>