<?php add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'bootstrap', 'parent-style' ) );
}
if (ICL_LANGUAGE_CODE=='en'){ 
  
        remove_filter('the_title', 'ztjalali_persian_num');
        remove_filter('the_content', 'ztjalali_persian_num');
        remove_filter('the_excerpt', 'ztjalali_persian_num');
        remove_filter('comment_text', 'ztjalali_persian_num');
    // change arabic characters
        remove_filter('the_content', 'ztjalali_ch_arabic_to_persian');
        remove_filter('the_title', 'ztjalali_ch_arabic_to_persian');
        remove_filter('the_excerpt', 'ztjalali_ch_arabic_to_persian');
        remove_filter('comment_text', 'ztjalali_ch_arabic_to_persian');
    


}