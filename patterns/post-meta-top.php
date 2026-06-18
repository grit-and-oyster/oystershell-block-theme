<?php

/**
 * Title: Post meta top
 * Slug: oystershell-block-theme/post-meta-top
 * Categories: oystershell-block-theme/core
 * Inserter: yes
 * 
 * @package WordPress
 * @subpackage OysterShell_Block_Theme
 * @since OysterShell Block Theme 1.0
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
    <!-- wp:paragraph -->
    <p><?php esc_html_e('Written by ', 'oystershell-block-theme'); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:post-author-name {"isLink":true} /-->
    <!-- wp:paragraph -->
    <p><?php esc_html_e('on', 'oystershell-block-theme'); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:post-date {"format":"M j, Y","isLink":true, "metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->
</div>
<!-- /wp:group -->
<!-- wp:post-comments-link /-->