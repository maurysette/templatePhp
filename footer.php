<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

$hide_footer = false;
$page_id = get_the_ID();

if ( is_page() ){
    $hide_footer = get_post_meta( $page_id, '_hide_footer', true );
}

if ( onepress_is_wc_active() ) {
    if ( is_shop() ) {
        $page_id =  wc_get_page_id('shop');
        $hide_footer = get_post_meta( $page_id, '_hide_footer', true );
    }
}

if ( ! $hide_footer ) {
    ?>
    <footer id="colophon" class="site-footer" role="contentinfo" >
        <?php
        /**
         * @since 2.0.0
         * @see onepress_footer_widgets
         * @see onepress_footer_connect
         */
        do_action('onepress_before_site_info');
        $onepress_btt_disable = sanitize_text_field(get_theme_mod('onepress_btt_disable'));

        ?>

        <div class="site-info">
            <div class="container">
                <?php if ($onepress_btt_disable != '1') : ?>
                    <div class="btt">
                        <a class="back-to-top" href="#page" title="<?php echo esc_html__('Back To Top', 'onepress') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
                    </div>
                <?php endif; ?>
                <?php
                /**
                 * hooked onepress_footer_site_info
                 * @see onepress_footer_site_info
                 */
                // modification de l'intitulé du pied de page
                 echo "Cutting edge"; 
                ?> 
			
               <div class="footer-2-copy-cont clearfix">
                <!-- Social Links -->
				  <!-- chaque ancre de lien contient une image avec son css
			impossible d'appliquer le css dans un autre fichier quelque chose bloque-->
                <div class="footer-2-soc-a right">
                    <a href="https://www.facebook.com/Cutting-Edge-1424018574309097/" title="Facebook" target="_blank">
						<img style="width: 40px ;
	height: 40px ;" src="http://localhost/cutting-edge/wp-content/uploads/2020/06/facebook.png" alt=""/></a>
                    <a href="https://twitter.com/CuttingEdge_Int" title="Twitter" target="_blank">
					<img style="width: 40px ;
	height: 40px ;" src="http://localhost/cutting-edge/wp-content/uploads/2020/06/twitter.jpg">
					</a>
                    <a href="https://www.linkedin.com/company/cutting-edge-international" title="LinkedIn" target="_blank">
					<img style="width: 40px ;
	height: 40px ;" src="http://localhost/cutting-edge/wp-content/uploads/2020/06/linkedin.png"></a>
                    <a href="https://www.youtube.com/channel/UCzvFNAp0CYtUzdPMZRee2wA" title="Youtube" target="_blank">
						<img style="height:40px; width:40px;" src="http://localhost/cutting-edge/wp-content/uploads/2020/06/youtube.jpg"></a>
                </div>

            </div>
            </div>
        </div>
        <!-- .site-info -->

    </footer><!-- #colophon -->
    <?php
}
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div><!-- #page -->

<?php do_action( 'onepress_after_site_end' ); ?>

<?php wp_footer(); ?>

</body>
</html>
