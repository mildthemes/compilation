<?php
/**
 * Title: Comments section and form
 * Slug: compilation/comments
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Comments"},"className":"entry-comments","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0px"},"blockGap":"0","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"top":{"color":"var:preset|color|neutral","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"620px"}} -->
<section class="wp-block-group entry-comments" style="border-top-color:var(--wp--preset--color--neutral);border-top-width:1px;margin-top:var(--wp--preset--spacing--medium);margin-bottom:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"lineHeight":"1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"1.6px","fontSize":"14px"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:1.6px;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Comments ¬', 'compilation' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"32px"}},"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:comment-template {"fontSize":"x-small"} -->
<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"bottom":"var:preset|spacing|medium"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<article class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<header class="wp-block-group"><!-- wp:avatar {"size":48,"style":{"border":{"radius":"24px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary","fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"14px"}},"textColor":"primary"} /-->

<!-- wp:comment-edit-link {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"style":{"typography":{"letterSpacing":"0px","textTransform":"uppercase","fontSize":"14px"}}} /--></article>
<!-- /wp:group -->
<!-- /wp:comment-template --></div>
<!-- /wp:group --></div>
<!-- /wp:comments -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></section>
<!-- /wp:group -->