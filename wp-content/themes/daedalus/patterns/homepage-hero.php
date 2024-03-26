<?php
/**
 * Title: Home Page Hero
 * Slug: daedalus/homepage-hero
 * Categories: hero
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/st-louis-arch.jpg","id":70,"dimRatio":20,"focalPoint":{"x":0.5,"y":0.73},"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0px","left":"0px"}}},"className":"hero-image fullheight","layout":{"type":"default"}} -->
<div class="wp-block-cover hero-image fullheight" style="margin-top:0;margin-bottom:0;padding-right:0px;padding-left:0px;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-70" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/st-louis-arch.jpg" style="object-position:50% 73%" data-object-fit="cover" data-object-position="50% 73%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1280px","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","className":"homepage-hero-heading-copy","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide homepage-hero-heading-copy"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"textTransform":"uppercase","fontSize":"3rem","fontStyle":"normal","fontWeight":"800"}}} -->
<h1 class="wp-block-heading alignwide" style="font-size:3rem;font-style:normal;font-weight:800;text-transform:uppercase"><?php echo wp_kses('Empowering Victims.<br>Pursuing Justice.', array('br' => array())); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"24px","bottom":"24px"}}}} -->
<p class="has-text-align-left" style="padding-top:24px;padding-bottom:24px;text-transform:uppercase"><?php echo esc_html_x('Jeff Rendel Law Group - Saint Louis\' Preeminent Injury Law Practice', 'Homepage subheading', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px","width":"2px"},"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"1px","textTransform":"uppercase"}},"borderColor":"base-2","className":"is-style-outline hero-button"} -->
<div class="wp-block-button is-style-outline hero-button" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-border-color has-base-2-border-color wp-element-button" style="border-width:2px;border-radius:0px"><?php echo esc_html_x('Our Results', 'Button text of the hero section', 'daedalus') ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"0px","width":"2px"},"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"500"}},"borderColor":"base-2","className":"is-style-outline hero-button"} -->
<div class="wp-block-button is-style-outline hero-button" style="font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link has-border-color has-base-2-border-color wp-element-button" style="border-width:2px;border-radius:0px"><?php echo esc_html_x('Our Reviews', 'Button text of the hero section', 'daedalus') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:html -->
<a class="desktop-only" 
 href="#our-practice-areas">
    <div class="round">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
   </a>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#3b414fe6"}},"className":"cover-bottom-copy desktop-only","layout":{"type":"default"}} -->
<div class="wp-block-group cover-bottom-copy desktop-only has-background" style="background-color:#3b414fe6"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px"}}},"layout":{"type":"constrained","contentSize":"1280px","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-bottom:24px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:500"><?php echo wp_kses('Have an Injury Question?<br>Give Us a Call', array('br' => array())); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-size:40px;font-style:normal;font-weight:500"><?php echo esc_html_x('(314) 324-9823', 'Phone number', 'daedalus') ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-center" style="font-size:22px;font-style:normal;font-weight:500"><?php echo wp_kses('Open Mon-Fri<br>8:00am to 5:00pm', array('br' => array())); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->