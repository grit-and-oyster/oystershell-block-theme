<?php

/**
 * Title: Top post meta
 * Slug: oystershell-block-theme/post-meta-top
 */
?>


<!-- wp:group {"style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
    <!-- wp:paragraph -->
    <p><?php esc_html_e('Written by ', 'twentytwentyfive'); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:post-author-name {"isLink":true} /-->
    <!-- wp:paragraph -->
    <p><?php esc_html_e('on', 'twentytwentyfive'); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:post-date {"format":"M j, Y","isLink":true} /-->
    <!-- wp:paragraph -->

</div>
<!-- /wp:group -->
<!-- wp:post-comments-link /-->