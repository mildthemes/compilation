<?php
/**
 * Title: 404 page
 * Slug: compilation/404
 * Inserter: no
 * Categories: compilation-patterns
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"45px","bottom":"45px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"color":{"background":"#d4d9df"}},"textColor":"secondary","className":"entry-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group entry-header has-secondary-color has-text-color has-background has-link-color" style="background-color:#d4d9df;margin-top:0;margin-bottom:0;padding-top:45px;padding-right:0;padding-bottom:45px;padding-left:0"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php echo esc_html__( 'Not found, error 404', 'compilation' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:40px;padding-bottom:40px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place. Please try searching using the form below.', 'compilation' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","align":"center","fontSize":"small"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->