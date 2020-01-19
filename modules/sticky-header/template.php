<?php
/**
 * Header Mobile Widget
 *
 * @package BB Child OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {exit;}
?>

<div id="bb-site-header-sticky" class="bb-header-mobile">
    <?php if(is_user_logged_in()) : ?>
        <?php dynamic_sidebar('bb-header-mobile-logged-in'); ?>
    <?php else: ?>
        <?php dynamic_sidebar('bb-header-mobile-logged-out'); ?>
    <?php endif; ?>
</div>