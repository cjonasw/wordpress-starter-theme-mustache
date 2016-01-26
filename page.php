<?php

  $compiler = include('compiler.php');
  $data = include('page-data.php');

  if ( have_posts() ) : while ( have_posts() ) : the_post();

    $data['page'] = array(
      'permalink' => get_permalink(),
      'title' => get_the_title(),
      'content' => get_the_content()
    );

  endwhile; endif;

  echo $compiler->render('page', $data);

?>
