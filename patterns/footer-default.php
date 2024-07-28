<?php
/**
 * Title: Footer
 * Slug: compilation/footer-default
 * Block Types: core/template-part/footer
 * Categories: compilation-patterns
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"40px","bottom":"40px","left":"30px","right":"30px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","textColor":"base","className":"has-background-color","layout":{"type":"constrained","contentSize":"960px"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-secondary-background-color has-text-color has-background has-link-color has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:columns {"style":{"elements":{"link":{"color":[]}}}} -->
<div class="wp-block-columns has-link-color"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1"}},"className":"wp-block-heading","fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" id="our-company" style="line-height:1"><?php echo esc_html__( 'About ¬', 'compilation' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
<p style="font-size:15px"><?php echo esc_html__( 'Featuring a clean and minimal design, the Compilation WordPress theme enables users to easily build curated lists and directory websites with WordPress.', 'compilation' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}},"typography":{"fontSize":"15px"}}} -->
<p class="has-text-align-left has-link-color" style="font-size:15px">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> • Powered by WordPress & <a href="https://mildthemes.co/compilation-wordpress-theme/" target="_blank">Compilation</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"23%"} -->
<div class="wp-block-column" style="flex-basis:23%"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1"}},"className":"wp-block-heading","fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" id="about-us" style="line-height:1"><?php echo esc_html__( 'Pages ¬', 'compilation' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"fontSize":"15px"}}} -->
<ul style="font-size:15px"><!-- wp:list-item {"fontSize":"x-small"} -->
<li class="has-x-small-font-size"><a href="#"><?php echo esc_html__( 'About', 'compilation' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Categories', 'compilation' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Posts', 'compilation' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Contact', 'compilation' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"style":{"typography":{"lineHeight":"1"}},"className":"wp-block-heading","fontSize":"medium"} -->
<h4 class="wp-block-heading has-medium-font-size" id="connect" style="line-height:1"><?php echo esc_html__( 'Connect ¬', 'compilation' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"fontSize":"15px"}}} -->
<ul style="font-size:15px"><!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Facebook', 'compilation' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Instagram', 'compilation' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'Twitter', 'compilation' ); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php echo esc_html__( 'LinkedIn', 'compilation' ); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->