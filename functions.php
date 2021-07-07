<?php

//get the child theme style sheets working
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    
        //enqueue JS
        wp_enqueue_script( 'fontawesome', get_theme_file_uri() . '/scripts.js', array ( 'jquery' ), 1.1, true);

        wp_enqueue_style( 'bootstrap-styles', get_theme_file_uri() . '/resources/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
        //wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css');

      //enqueue Bootstrap JS library
      wp_enqueue_script( 'bootstrap-scripts', get_theme_file_uri() . '/resources/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
      //wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@next/dist/aos.js', array ( 'jquery' ), 1.1, true);

          //enqueue FontAwesome
          wp_enqueue_script( 'script', 'https://kit.fontawesome.com/1a661f228b.js', array ( 'jquery' ), 1.1, true);

          wp_enqueue_style( 'child-style', get_stylesheet_uri(),
          array( 'twenty-twenty-one-style' ), 
          wp_get_theme()->get('Version') // this only works if you have Version in the style header
        );

}




function cq_pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if(1 != $pages)
    {
        echo "<nav aria-label='Page navigation' class='pagination'>  <ul class='pagination custom'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\">i class='flaticon flaticon-back'></i></a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
        echo "</ul></nav><div class='page-indicator'>Page ".$paged." of ".$pages."</div>\n";
    }
}



?>