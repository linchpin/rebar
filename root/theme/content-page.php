<?php
/**
 * Content Template
 *
 * The default template for displaying content. Used within single and index/archive/search templates.
 *
 * @since {%= base_version %}
 *
 * @package {%= class_name %}
 * @subpackage Templates
 */

?>

<?php
/** This action is documented in includes/Linchpin/hatch-hooks.php */
do_action( 'rebar_post_before' ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( ! in_array( basename( get_page_template() ), $templates_with_title ) ) : ?>
        <header>
            <h1><?php the_title(); ?></h1>
        </header>
    <?php endif; ?>

	<?php
	/** This action is documented in includes/Linchpin/hatch-hooks.php */
	do_action( 'rebar_post_entry_content_before' ); ?>

	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', '{%= text_domain %}' ) ); ?>
	</div>

	<?php
	/** This action is documented in includes/Linchpin/hatch-hooks.php */
	do_action( 'rebar_post_entry_content_after' ); ?>

	<?php get_template_part( 'partials/edit-controls' ); ?>
</article>

<?php
/** This action is documented in includes/Linchpin/hatch-hooks.php */
do_action( 'rebar_post_after');
