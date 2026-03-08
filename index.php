<?php
// Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php get_header(); ?>

<?php

while (have_posts()):
    the_post();
    
    the_title();
        
    the_content();
endwhile;

wp_reset_postdata();


?>
<?php get_footer(); ?>