<?php

function output_buffer_contents($function, $args = array()){
  ob_start();
  $function($args);
  $contents = ob_get_contents();
  ob_end_clean();
  return $contents;
}

add_action('wp_head', 'show_template');
function show_template() {
  if ( $_SERVER["SERVER_ADDR"] == '127.0.0.1' ) { // TODO: Need to test this
  	global $template;
  }
}

// function getPages() {
//
//   $pages = array();
//
//   foreach ( get_pages() as $page ) {
//
//     array_push(
//       $pages,
//       array(
//         'title' => $page->post_title,
//         'link'  => get_permalink( $page->ID )
//       )
//     );
//   }
//
//   return $pages;
// }
//
// function getCategories() {
//
//   $categories = array();
//
//   foreach (get_categories('show_count=0&title_li=&hide_empty=0&exclude=1') as $category) {
//
//     $category->link = get_category_link( $category->term_id );
//
//     array_push($categories, $category);
//   };
//
//   return $categories;
//
// }

?>
