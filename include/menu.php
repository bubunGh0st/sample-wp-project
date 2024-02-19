<?php 

//Registering Menu Location
function homeo_menu_location(){

	$location = array(
		'main-menu' => "Main Menu",
		'ft-menu' => "Footer Menu",
		'ft-srvmenu' => "Footer Services Menu",
	);

	register_nav_menus($location);
}
add_action('init', 'homeo_menu_location');


//Add Active Class in Menu
function homeo_active_class($classes, $item){
  if ( in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'homeo_active_class' , 10 , 2);


/* * * Walker for the main menu * */ 
/*add_filter( 'walker_nav_menu_start_el', 'add_arrow',10,4); 
function add_arrow( $output, $item, $depth, $args ){ 
//Only add class to 'top level' items on the 'primary' menu. 
    if('main-menu' == $args->theme_location && $depth === 0 ){
        if (in_array("menu-item-has-children", $item->classes)){ 
            $output .='<i class="arw-nav fas fa-plus">'; 
        } 
    } 
    return $output;
}*/


//Blog Page Pagination
function homeo_blog_pagination() {
  
    if( is_singular() )
        return;
  
    global $wp_query;
  
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
  
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
  
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">' . "\n";
  
    /** Previous Post Link */
    if ( get_previous_posts_link() )
    		$plink = get_previous_posts_page_link();
        printf( '<li class="page-item">
										<a class="page-link" href="'.$plink.'" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
											<span class="sr-only">Previous</span>
										</a>
									</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="page-item active"' : '';
  
        printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="page-item active"' : '';
        printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
  
        $class = $paged == $max ? ' class="page-item active"' : '';
        printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    if ( get_next_posts_link() )
    		$nlink = get_next_posts_page_link();
        printf( '<li class="page-item">
										<a class="page-link" href="'.$nlink.'" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
											<span class="sr-only">Next</span>
										</a>
									</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
  
}