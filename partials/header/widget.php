<?php
/**
 * Header Widget
 *
 * @package BB Child OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {exit;}
?>

<?php if ( !function_exists('Header') || !dynamic_sidebar('Header') ) : ?>
<?php endif;?>