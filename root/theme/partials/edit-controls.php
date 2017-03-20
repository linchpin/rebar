<?php
/**
 * Editing
 *
 * Partial file used for all post/page editing controls on the frontend
 *
 * @since {%= base_version %}
 *
 * @package {%= class_name %}
 * @subpackage Partials
 * */

?>

<div class="utility edit-post-link-container">
	<?php edit_post_link( __( 'Edit Content', '{%= text_domain %}' ) , '<span class="float-right">', '</span>', '', esc_attr( 'button', '{%= text_domain %}' ) ); ?>
</div>
