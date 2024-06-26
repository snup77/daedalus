<?php
/**
 * Title: Practices Layout
 * Slug: daedalus/practices-layout
 * Categories: 3 col, 2 row, practices layout
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":419,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/auto-accidents.svg" alt="" class="wp-image-419"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<h2 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-size:26px;font-style:normal;font-weight:600"><?php echo esc_html_x('Auto Accidents', 'Practice area', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html_x('Personalized guidance and support for victims of auto accidents, ensuring fair compensation for injuries and damages sustained.', 'Service description', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3c65c7"},"elements":{"link":{"color":{"text":"#3c65c7"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"fontSize":"medium"} -->
<p class="has-text-color has-link-color has-medium-font-size" style="color:#3c65c7;padding-top:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;text-decoration:none"><a href="/"><?php echo esc_html_x('Learn More', 'link text', 'daedalus') ?><img class="wp-image-88" style="width: 17px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.svg" alt=""></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":424,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/wrongful-deaths.svg" alt="" class="wp-image-424"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<h2 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-size:26px;font-style:normal;font-weight:600"><?php echo esc_html_x('Wrongful Deaths', 'Practice area', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html_x('Our attorneys offers compassionate guidance and aggressive representation to pursue justice and financial recovery for grieving families.', 'Service description', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3c65c7"},"elements":{"link":{"color":{"text":"#3c65c7"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"fontSize":"medium"} -->
<p class="has-text-color has-link-color has-medium-font-size" style="color:#3c65c7;padding-top:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;text-decoration:none"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Learn More', 'link text', 'daedalus') ?><img class="wp-image-88" style="width: 17px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.svg" alt=""></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":421,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/medical-malpractice.svg" alt="" class="wp-image-421"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<h2 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-size:26px;font-style:normal;font-weight:600"><?php echo esc_html_x('Medical Malpractice', 'Practice area', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html_x('We leverage our extensive expertise to hold negligent healthcare professionals accountable and obtain compensation for the harm caused.', 'Service description', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3c65c7"},"elements":{"link":{"color":{"text":"#3c65c7"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"fontSize":"medium"} -->
<p class="has-text-color has-link-color has-medium-font-size" style="color:#3c65c7;padding-top:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;text-decoration:none"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Learn More', 'link text', 'daedalus') ?><img class="wp-image-88" style="width: 17px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.svg" alt=""></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":423,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/slip-fall-injuries.svg" alt="" class="wp-image-423"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<h2 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-size:26px;font-style:normal;font-weight:600"><?php echo esc_html_x('Slip &amp; Fall Injuries', 'Practice area', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html_x('Committed to investigate premise liability and pursue maximum compensation for clients injured due to property owner negligence.', 'Service description', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3c65c7"},"elements":{"link":{"color":{"text":"#3c65c7"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"fontSize":"medium"} -->
<p class="has-text-color has-link-color has-medium-font-size" style="color:#3c65c7;padding-top:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;text-decoration:none"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Learn More', 'link text', 'daedalus') ?><img class="wp-image-88" style="width: 17px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.svg" alt=""></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":422,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/negligent-securities.svg" alt="" class="wp-image-422"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<h2 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-size:26px;font-style:normal;font-weight:600"><?php echo esc_html_x('Negligent Securities', 'Practice area', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html_x('We representing investors who have suffered financial losses due to fraudulent or deceptive practices.', 'Service description', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3c65c7"},"elements":{"link":{"color":{"text":"#3c65c7"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"fontSize":"medium"} -->
<p class="has-text-color has-link-color has-medium-font-size" style="color:#3c65c7;padding-top:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;text-decoration:none"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Learn More', 'link text', 'daedalus') ?><img class="wp-image-88" style="width: 17px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.svg" alt=""></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:image {"id":420,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/brain-injuries.svg" alt="" class="wp-image-420"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<h2 class="wp-block-heading" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);font-size:26px;font-style:normal;font-weight:600"><?php echo esc_html_x('Brain Injuries', 'Practice area', 'daedalus') ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html_x('We fight to secure compensation for medical expenses, lost wages, and long-term care needs resulting from these injuries.', 'Service description', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3c65c7"},"elements":{"link":{"color":{"text":"#3c65c7"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"},"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"fontSize":"medium"} -->
<p class="has-text-color has-link-color has-medium-font-size" style="color:#3c65c7;padding-top:var(--wp--preset--spacing--10);font-style:normal;font-weight:700;text-decoration:none"><a href="<?php echo esc_url( '/' ); ?>"><?php echo esc_html_x('Learn More', 'link text', 'daedalus') ?><img class="wp-image-88" style="width: 17px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.svg" alt=""></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->