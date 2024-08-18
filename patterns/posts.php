<?php
/**
 * Title: Posts with pagination
 * Slug: compilation/posts
 * Categories: compilation-posts
 * Keywords: blog, posts, pagination
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"categories":["compilation-posts"],"patternName":"compilation/posts","name":"Posts with pagination"},"className":"is-style-default","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"40px","bottom":"0px"}}}} -->
<main class="wp-block-group is-style-default" style="margin-top:0;padding-top:40px;padding-bottom:0px"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":"12"},"enhancedPagination":true,"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
<article class="wp-block-group"><!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"10px"}}} -->
<header class="wp-block-group entry-header"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"5px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"#888888"}}},"color":{"text":"#888888"},"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"top":"5px","bottom":"5px"}}}} /--></header>
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