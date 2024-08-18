<?php 
/**
 * Title: Recent posts, 3 columns
 * Slug: compilation/recent-posts-3c
 * Categories: compilation-posts
 * Keywords: recent, latest, posts
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"letterSpacing":"1px","lineHeight":"1","fontSize":"17px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary"} -->
<h3 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:17px;font-style:normal;font-weight:700;letter-spacing:1px;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Recent ¬', 'compilation' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"tagName":"main","className":"is-style-default","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"0px"}}}} -->
<main class="wp-block-group is-style-default" style="margin-top:0;padding-top:0px;padding-bottom:0px"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":"3"},"enhancedPagination":true,"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"grid","columnCount":"3"}} -->
<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
<article class="wp-block-group"><!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"10px"}}} -->
<header class="wp-block-group entry-header"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"5px","bottom":"0"}},"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"top":"5px","bottom":"5px"}},"elements":{"link":{"color":{"text":"#00000099"}}}},"textColor":"meta"} /--></header>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->