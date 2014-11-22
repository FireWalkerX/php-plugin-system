<?php
  
  // plugin directory
  $hook_dir = "hooks/";
  
  // get all plugin files
  $hook_files = glob($hook_dir."*.php");
  
  // array saving all our hooks on 'the_content'
  $hooks['the_content'] = array();
  
  // add_filter functionality
  function add_filter($on, $func) {
    global $hooks;
    array_push($hooks[$on], $func);
  }
  
  // include plugin files
  foreach($hook_files as $hook_file) {
    require_once($hook_file);
  }
  
  // implement the hooks
  foreach($hooks['the_content'] as $hook) {
    $content = call_user_func($hook, $content);
  }
  
  echo $content;
  
?>
