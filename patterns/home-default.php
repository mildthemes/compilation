<?php 
/**
 * Title: Homepage
 * Slug: compilation/home-default
 * Categories: compilation-patterns
 * Keywords: home, frontpage, default
 */
?>
<!-- wp:pattern {"slug":"compilation/hero-default"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"letterSpacing":"1px","lineHeight":"1","fontSize":"17px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"contrast"} -->
<h3 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color" style="font-size:17px;font-style:normal;font-weight:700;letter-spacing:1px;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Recent ¬', 'compilation' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"tagName":"main","className":"is-style-default","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"0px"}}}} -->
<main class="wp-block-group is-style-default" style="margin-top:0;padding-top:0px;padding-bottom:0px"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":"4"},"enhancedPagination":true,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
<article class="wp-block-group"><!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"10px"}}} -->
<header class="wp-block-group entry-header"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"5px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#888888"}}},"color":{"text":"#888888"},"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"top":"5px","bottom":"5px"}}}} /--></header>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontSize":"17px","letterSpacing":"1px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color" style="font-size:17px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php echo esc_html__( 'Categories ¬', 'compilation' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"metadata":{"name":"Compilation Categories"},"align":"wide","className":"is-style-category-block"} /--></div>
<!-- /wp:group -->
