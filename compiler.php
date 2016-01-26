<?php

require_once('vendor/autoload.php');

return new Mustache_Engine(array(
   'loader' => new Mustache_Loader_FilesystemLoader(get_template_directory() . '/views')
));

?>
