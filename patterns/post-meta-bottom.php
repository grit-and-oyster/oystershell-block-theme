<?php

/**
 * Title: Post meta bottom
 * Slug: oystershell-block-theme/post-meta-bottom
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
    <!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x('Posted in ', 'Prefix for the post category block: Posted in', 'oystershell-block-theme'); ?>"} /-->
    <!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_html_x('and tagged ', 'Prefix for the post tag block: and tagged', 'oystershell-block-theme'); ?>"} /-->
</div>
<!-- /wp:group -->