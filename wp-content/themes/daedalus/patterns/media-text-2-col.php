<?php
/**
 * Title: Media Text 2-Col
 * Slug: daedalus/media-text-2-col
 * Categories: homepage
 */
?>
<!-- wp:group {"metadata":{"categories":["homepage"],"patternName":"daedalus/media-text-2-col","name":"Media Text 2-Col"},"style":{"color":{"background":"#fbfafa"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group has-background" style="background-color:#fbfafa"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/susan-curcio-headshot.jpg","id":479,"dimRatio":0,"customOverlayColor":"#d6d1cf","isUserOverlayColor":true,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#d6d1cf"></span><img class="wp-block-cover__image-background wp-image-479" alt="" src="http://jeff-rendel-law.local/wp-content/themes/daedalus/assets/images/susan-curcio-headshot.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|10"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"className":"homepage-about-me-padding"} -->
<h2 class="wp-block-heading homepage-about-me-padding"><strong><?php echo esc_html_x('Susan Curcio Family Attorney', 'Homepage subheading', 'daedalus') ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:separator {"style":{"color":{"background":"#f08749"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#f08749;color:#f08749"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x('Meet Susan Curcio, a dedicated family law attorney serving the Santa Fe community with compassion and expertise.', 'About me copy', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x('Susan is committed to guiding her clients through the complexities of family legal matters. From divorce and child custody to prenuptial agreements and adoptions, Susan provides unwavering support and advocacy, ensuring that her clients achieve the best possible outcomes for themselves and their families.', 'About us copy', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"},"color":{"background":"#f08749"},"border":{"radius":"5px"}}} -->
<div class="wp-block-button" style="letter-spacing:2px;text-transform:uppercase"><a class="wp-block-button__link has-background wp-element-button" href="<?php echo esc_url( '/' ); ?>" style="border-radius:5px;background-color:#f08749"><?php echo esc_html_x('Meet Susan', 'button label', 'daedalus') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->