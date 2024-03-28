<?php
/**
 * Title: Contact Page Section
 * Slug: daedalus/contact-page-section
 * Categories: contact, 2 col
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base-2","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"1280px","justifyContent":"center"}} -->
<div class="wp-block-group has-base-2-background-color has-background" style="padding-top:0;padding-bottom:0"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="padding-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html_x('Let\'s Talk!', 'heading', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"color":{"background":"#3c65c7"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);background-color:#3c65c7;color:#3c65c7"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group has-base-2-background-color has-background"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:shortcode -->
[contact-form-7 id="745259a" title="Contact form 1"]
<!-- /wp:shortcode --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#e8eefe"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-background" style="background-color:#e8eefe;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php echo esc_html_x('Location', 'Heading for address', 'daedalus') ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"#3c65c7"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);background-color:#3c65c7;color:#3c65c7"/>
<!-- /wp:separator -->

<!-- wp:html -->
<address class="contact-page-address">
<?php echo wp_kses('<strong>Jeff Rendel Law Group</strong><br>802 Pine Street<br>Saint Louis, MO 63101', array('br' => array(), 'strong' => array())); ?>
</address>
<!-- /wp:html --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php echo esc_html_x('Contact', 'Heading for contact info', 'daedalus') ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"#3c65c7"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10);background-color:#3c65c7;color:#3c65c7"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x('(314) 324-9823', 'phone number', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_x('hello@jeffrendel.com', 'email address', 'daedalus') ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->