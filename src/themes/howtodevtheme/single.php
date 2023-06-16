<?php
get_header();
?>
	<main id="primary" class="site-man">
		<?php
		if(have_posts()) :
			while ( have_posts() ):
				the_post();
				get_template_part('template-parts/content', get_post_type());

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitles">' . esc_html__('Previous:', 'howtodev') . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitles">' . esc_html__('Next:', 'howtodev') . '</span> <span class="nav-title">%title</span>'
 					)
				);
			endwhile;


			if(comments_open() || get_comments_number()):
				comments_template();
			endif;
		endif;
		?>
	</main><!--    #main-->
<?php
get_footer();
?>