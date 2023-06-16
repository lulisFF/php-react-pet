<?php
/**
 * The main page file
 */
?>

<artical id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h2 class="entry-title"><a href="'. esc_url(get_permalink()) .'">', '</a></h2>');
		?>
	</header>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html(__('Pages:', "howtodev")),
				'after' => '</div>'
			)
		);
		?>
	</div>
</artical>
