<?php
/**
 * Title: 404 page
 * Slug: compilation/404
 * Inserter: no
 */
?>
<!-- wp:group {"className":"entry-header","style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"backgroundColor":"neutral","textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group entry-header has-primary-color has-neutral-background-color has-text-color has-background has-link-color" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<h1 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color"><?php echo esc_html__( 'Error 404, page not found :(', 'compilation' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:40px;padding-bottom:40px"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color"><?php echo esc_html__( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place. Please try searching using the form below.', 'compilation' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","align":"center","fontSize":"small"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->