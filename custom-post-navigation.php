<?php
/**
 * Custom post navigation with thumbnails
 *
 * @author Gloria Ingrassia
 * @since 1.0.0
 */

function glr_post_navigation() {

	$prev_text = '';
	$prev_post = get_previous_post();
	if ( ! empty ( $prev_post ) ) {
		$prev_thumbnail = get_the_post_thumbnail( $prev_post->ID, 'thumbnail');
		$prev_title = '<span class="title">%title</span>';
		$prev_text = $prev_thumbnail . $prev_title;
	}

	$next_text = '';
	$next_post = get_next_post();
	if ( ! empty ( $next_post ) ) {
		$next_thumbnail = get_the_post_thumbnail( $next_post->ID, 'thumbnail');
		$next_title = '<span class="title">%title</span>';
		$next_text = $next_thumbnail . $next_title;
	}

	$args = array(
		'prev_text'  => $prev_text,
		'next_text'  => $next_text
	);

	echo the_post_navigation( $args );

}
