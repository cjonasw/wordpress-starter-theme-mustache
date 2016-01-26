<?php

$data = array(
  'message' => 'This is a seperate mustache render being included using {{{seperate_mustache_render_example}}}'
);

return $compiler->render('seperate-mustache-render-example', $data);

?>
