<?php
/**
 * Title: about homepage section
 * Slug: daedalus/about-homepage-section
 * Categories: 2 columns
 */
?>

<!-- wp:group {"style":{"color":{"background":"#fbfafa"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group has-background" style="background-color:#fbfafa"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/jeff-rendel-homepage.jpg","id":121,"dimRatio":0,"minHeight":600,"minHeightUnit":"px","isDark":false,"className":"about-me-height","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light about-me-height" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-121" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/jeff-rendel-homepage.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"className":"mobile-homepage-aboutme-padding"} -->
<div class="wp-block-column is-vertically-aligned-center mobile-homepage-aboutme-padding" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|10","left":"0","right":"0"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0;text-transform:uppercase"><?php echo esc_html_x('Saint Louis\' Best Personal Injury Law Practice', 'section subheading', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h2 class="wp-block-heading" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20);font-style:normal;font-weight:700"><?php echo esc_html_x('Jeff Rendel Law Group', 'section heading', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"#3c65c7"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="margin-top:0;margin-bottom:0;background-color:#3c65c7;color:#3c65c7"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:0"><?php echo esc_html_x('Welcome to Jeff Rendel Law Group, a trusted personal injury law group serving the Saint Louis, Missouri community for over a decade.', 'About Jeff', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x('We believe in providing compassionate support and aggressive representation to every client, ensuring their rights are protected and their voices are heard. Trust in our proven track record of success as we continue to fight for justice on behalf of those injured through no fault of their own.', 'About Jeff', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#3c65c7"},"border":{"radius":"0px"},"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size has-medium-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-background wp-element-button" style="border-radius:0px;background-color:#3c65c7"><?php echo esc_html_x('Meet Jeff', 'button text', 'daedalus') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->