<?php

/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	if (is_singular('page')) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

function post_has_archive($args, $post_type)
{

	if ('post' == $post_type) {
		$args['rewrite'] = true;
		// $args['has_archive'] = 'journal'; 
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
