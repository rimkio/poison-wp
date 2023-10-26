<?php

/**
 * Hooks.
 */

function imageTagForJs($response, $attachment)
{
	foreach ($response['sizes'] as $size => $datas) {
		$response['sizes'][$size]['tag']    = wp_get_attachment_image($attachment->ID, $size);
		$response['sizes'][$size]['srcset'] = wp_get_attachment_image_srcset($attachment->ID, $size);
	}
	return $response;
}
add_filter('wp_prepare_attachment_for_js', 'imageTagForJs', 10, 2);


/**
 * Allow upload json file
 */
add_filter('upload_mimes', function ($mime_types) {
	$mime_types['json'] = 'application/json'; // Adding .json extension

	return $mime_types;
}, 1);

/**
 * Header template
 * @return void
 */
add_action('poison_hook_header', 'poison_header_template');
function poison_header_template()
{
	load_template(get_template_directory() . '/template-parts/header.php', false);
}


/**
 * Footer template
 * @return void
 */
add_action('poison_hook_footer', 'poison_footer_template');
function poison_footer_template()
{
	load_template(get_template_directory() . '/template-parts/footer.php', false);
}

/**
 * Post loop item template
 *
 * @param Int $post_id
 *
 * @return void
 */
add_action('poison_hook_post_loop_item', 'poison_post_loop_item_template', 20, 2);
function poison_post_loop_item_template($post_id, $index)
{
	set_query_var('post_id', $post_id);
	$v  = ($index) % 3;
	$vT = ceil($v);

	$anm = 'data-aos="fade-up" data-aos-duration="' . (($v !== 0 ? $vT : 3) * 400) . '"';
?>
	<article <?= $anm; ?> <?php post_class('item post-loop-item col-md-4') ?>>
		<?php poison_post_item() ?>
	</article>
<?php
}



function poison_child_deregister_styles()
{
	wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'poison_child_deregister_styles', 20);
