<?php

/**
 * Title: Post meta bottom
 * Slug: oystershell-block-theme/post-meta-bottom
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
    <!-- wp:paragraph -->
    <p><?php esc_html_e('Posted in ', 'twentytwentyfive'); ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:post-terms {"term":"category"} /-->
    <!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_html_x('and tagged ', 'Prefix for the post tag block: and tagged', 'twentytwentyfive'); ?>"} /-->
</div>
<!-- /wp:group -->