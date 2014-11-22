<?php
  
  function Subscribe($content) {
    $subscribe = '<a href="http://prappo-prince.me">Find me :D </a>';
    
    
    return $subscribe.$content;
  }
  
  add_filter('the_content', 'Subscribe');
  
?>
