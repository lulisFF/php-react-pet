<?php
/**
 * The none content file
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php __('Noting found','howtodev') ?></h1>
	</header>
	<div class="page-content">
		<?php
		if (is_home() && current_user_can('publish_posts')):
			printf(
				'<p>' . wp_kses(
				/* translators: 1: link to WP admin new post page */
					__('Ready to publish your first post? <a href="%1$s"> Get started here</a>'),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url(admin_url('post-new.php'))
			);
		elseif ( is_search() ):
			?>
			<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with same different words') ?></p>
			<?php
			get_search_form();
		else:
			?>
			<p><?php esc_html_e('It seems we can&rsqua;t find what you&rsqua;t. Perhaps searching can help '); ?></p>
			<?php
			get_search_form();
		endif;
		?>
	</div>
</section>
