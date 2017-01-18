<?php
/**
 * Hatch Action Hooks
 *
 * Just a bunch of utility methods associated with our hooks
 *
 * @package Hatch
 * @since 1.0.0
 */

?>

<?php

/**
 * Hatch rebar_comments_before hook.
 * Add extra content before the comments are started.
 *
 * @since 2.0.0
 */
function rebar_comments_before() {
	do_action( 'rebar_comments_before' );
}

/**
 * Hatch rebar_comments_after hook.
 * Add extra content after the comments are done.
 *
 * @since 2.0.0
 */
function rebar_comments_after() {
	do_action( 'rebar_comments_after' );
}

/**
 * Hatch rebar_head_scripts hook.
 * Allow for additional scripts be be hooked into.
 * We utilize this for additional_head_scripts.
 *
 * @since 2.0.0
 */
function rebar_head_scripts() {
	do_action( 'rebar_head_scripts' );
}

/**
 * Hatch rebar_header_before hook.
 * Ability to add stuff before our headers.
 *
 * @since 2.0.0
 */
function rebar_header_before() {
	do_action( 'rebar_header_before' );
}

/**
 * Hatch rebar_header_inner_before hook.
 * Add some content within our header but before the rest
 * of our navigation.
 *
 * @since 2.0.0
 */
function rebar_header_inner_before() {
	do_action( 'rebar_header_inner_before' );
}

/**
 * Hatch rebar_header_inner_after
 * Add some content within our header but before the rest
 * of our navigation.
 *
 * @since 2.0.0
 */
function rebar_header_inner_after() {
	do_action( 'rebar_header_inner_after' );
}

/**
 * Hatch header_after hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0.0
 */
function rebar_header_after() {
	do_action( 'rebar_header_after' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0.0
 */
function rebar_content_before() {
	do_action( 'rebar_content_before' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0.0
 */
function rebar_content_after() {
	do_action( 'rebar_content_after' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_post_before() {
	do_action( 'rebar_post_before' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_post_after() {
	do_action( 'rebar_post_after' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_post_inside_before() {
	do_action( 'rebar_post_inside_before' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_post_inside_after() {
	do_action( 'rebar_post_inside_after' );
}

/**
 * Hatch rebar_loop_before hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_loop_before() {
	do_action( 'rebar_loop_before' );
}

/**
 * Hatch rebar_loop_after hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_loop_after() {
	do_action( 'rebar_loop_after' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_sidebar_before() {
	do_action( 'rebar_sidebar_before' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_sidebar_inner_before() {
	do_action( 'rebar_sidebar_inner_before' );
}

/**
 * Middleman hatch hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_sidebar_inner_after() {
	do_action( 'rebar_sidebar_inner_after' );
}

/**
 * Hatch rebar_sidebar_after hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_sidebar_after() {
	do_action( 'rebar_sidebar_after' );
}

/**
 * Hatch rebar_footer_before hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_footer_before() {
	do_action( 'rebar_footer_before' );
}

/**
 * Hatch rebar_footer_inner_before hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_footer_inner_before() {
	do_action( 'rebar_footer_inner_before' );
}

/**
 * Hatch rebar_footer_inner_after hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_footer_inner_after() {
	do_action( 'rebar_footer_inner_after' );
}

/**
 * Hatch rebar_footer_after hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_footer_after() {
	do_action( 'rebar_footer_after' );
}

/**
 * Hatch rebar_footer_scripts hook
 *
 * @package Hatch
 * @subpackage hooks
 *
 * @since 2.0
 */
function rebar_body_before_close() {
	do_action( 'rebar_body_before_close' );
}
