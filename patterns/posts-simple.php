<?php
/**
 * Title: Posts with title only + pagination
 * Slug: compilation/posts-simple
 * Categories: compilation-posts
 * Keywords: blog, posts, pagination
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"categories":["compilation-posts"],"patternName":"compilation/posts-simple","name":"Posts with title only + pagination"},"className":"is-style-default","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"40px","bottom":"0px"}}}} -->
<main class="wp-block-group is-style-default" style="margin-top:0;padding-top:40px;padding-bottom:0px"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":"12"},"enhancedPagination":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
<article class="wp-block-group"><!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"10px"},"border":{"width":"1px"}},"borderColor":"neutral"} -->
<header class="wp-block-group entry-header has-border-color has-neutral-border-color" style="border-width:1px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|neutral","width":"1px"}},"spacing":{"padding":{"top":"5px","bottom":"10px","left":"10px","right":"10px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--neutral);border-top-width:1px;margin-top:0px;margin-bottom:0px;padding-top:5px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"spacing":{"padding":{"top":"5px","bottom":"0"}},"typography":{"lineHeight":"1.5","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} /--></div>
<!-- /wp:group --></header>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px"><!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"is-style-pagination-button","style":{"typography":{"letterSpacing":"5px"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","verticalAlignment":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers {"midSize":1,"backgroundColor":"base"} /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->