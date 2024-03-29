<?php
/**
 * Title: Footer
 * Slug: twentytwentyfour/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|10"}},"color":{"background":"#3b414f"}},"className":"mobile-padding-bottom","layout":{"type":"constrained"}} -->
<div class="wp-block-group mobile-padding-bottom has-background" style="background-color:#3b414f;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|60"},"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"223px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--60)"><!-- wp:site-logo {"width":217,"shouldSyncIcon":true,"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x('The lawyers at Jeff Rendel Law Group represent clients who have been wrongfully injured by the negligence of others.', 'service description', 'daedalus') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"0"},"padding":{"top":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"550px"}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0"}}},"className":"footer-address"} -->
<div class="wp-block-column footer-address" style="padding-top:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<h4 class="wp-block-heading has-base-2-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html_x('Contact Information', 'Heading', 'daedalus') ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:separator {"style":{"color":{"background":"#3c65c7"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#3c65c7;color:#3c65c7"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:html -->
<address>
<?php echo wp_kses('<strong>Jeff Rendel Law Group</strong><br>802 Pine Street<br>Saint Louis, MO 63101', array('br' => array(), 'strong' => array())); ?>
</address>
<!-- /wp:html -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x('(314) 324-9823', 'phone number', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x('hello@jeffrendel.com', 'email address', 'daedalus') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"200px","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:200px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<h4 class="wp-block-heading has-base-2-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html_x('Injury lawyers', 'heading', 'daedalus') ?></h4>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:separator {"style":{"color":{"background":"#3c65c7"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#3c65c7;color:#3c65c7"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Auto Accidents', 'Practice area', 'daedalus') ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Wrongful Deaths', 'Practice area', 'daedalus') ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Medical Malpractice', 'Practice area', 'daedalus') ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Slip &amp; Fall Injuries', 'Practice area', 'daedalus') ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Negligent Securities', 'Practice area', 'daedalus') ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Brain Injuries', 'Practice area', 'daedalus') ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x('©2024 Jeff Rendel Law Group | Privacy Policy | Legal Disclaimer', 'copyright and additional footer links', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2","fontSize":"small"} -->
<p class="has-base-2-color has-text-color has-link-color has-small-font-size"><?php echo esc_html_x('Law Firm Website by Sheth Agency', 'web design agency', 'daedalus') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->