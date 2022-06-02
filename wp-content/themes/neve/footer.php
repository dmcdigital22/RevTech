<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

/**
 * Executes actions before main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_before_primary_end' ); ?>

</main><!--/.neve-main-->

<?php

/**
 * Executes actions after main tag is closed.
 *
 * @since 1.0.4
 */
do_action( 'neve_after_primary' );

/**
 * Filters the content parts.
 *
 * @since 1.0.9
 *
 * @param bool   $status Whether the component should be displayed or not.
 * @param string $context The context name.
 */
if ( apply_filters( 'neve_filter_toggle_content_parts', true, 'footer' ) === true ) {

	/**
	 * Executes actions before the footer was rendered.
	 *
	 * @since 1.0.0
	 */
	do_action( 'neve_before_footer_hook' );

	/**
	 * Executes the rendering function for the footer.
	 *
	 * @since 1.0.0
	 */
	do_action( 'neve_do_footer' );

	/**
	 * Executes actions after the footer was rendered.
	 *
	 * @since 1.0.0
	 */
	do_action( 'neve_after_footer_hook' );
}
?>

</div><!--/.wrapper-->
<?php

wp_footer();

/**
 * Executes actions before the body tag is closed.
 *
 * @since 2.11
 */
do_action( 'neve_body_end_before' );
$currentUrl = getCurrentUrl();

if($currentUrl=="http://103.76.253.132/revtech/sales-teams/" || $currentUrl=="http://103.76.253.132/revtech/marketing-teams/" || $currentUrl=="http://103.76.253.132/revtech/customer-success-teams/" || $currentUrl=="http://103.76.253.132/revtech/operations-team/"){
?>

<script>
jQuery(document).ready(function(){
        jQuery(".title-with-logo").html('<img width="4611" height="660" src="http://103.76.253.132/revtech/wp-content/uploads/2022/05/LogoWhite.png" class="neve-site-logo skip-lazy mainiamge" alt="" loading="lazy" data-variant="logo" srcset="http://103.76.253.132/revtech/wp-content/uploads/2022/05/LogoWhite.png 4611w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/LogoWhite.png 300w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/LogoWhite.png 1024w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/LogoWhite.png 768w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/LogoWhite.png 1536w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/LogoWhite.png 2048w" sizes="(max-width: 4611px) 100vw, 4611px"><img width="4611" height="660" src="http://103.76.253.132/revtech/wp-content/uploads/2022/05/Logo.png" class="neve-site-logo stickyimage skip-lazy" alt="" loading="lazy" data-variant="logo" srcset="http://103.76.253.132/revtech/wp-content/uploads/2022/05/Logo.png 4611w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/Logo.png 300w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/Logo.png 1024w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/Logo.png 768w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/Logo.png 1536w, http://103.76.253.132/revtech/wp-content/uploads/2022/05/Logo.png 2048w" sizes="(max-width: 4611px) 100vw, 4611px">');  
	
});
</script>
<?php } ?>



</body>

</html>
