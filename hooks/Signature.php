<?php
  
  function Signature($content) {
    $signature = 'This is signature section :D';
    
    return $content.$signature;
  }
  
  add_filter('the_content', 'Signature');
  
?>
