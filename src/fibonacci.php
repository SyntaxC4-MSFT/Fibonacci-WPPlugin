<?php
/*
Plugin name: Fibonacci Plugin
Plugin URI: http://github.com/SyntaxC4-MSFT/Fibonacci-WPPlugin/wiki
Description: A simple plugin to delay page load time.
Author: Cory Fowler
Author URI: http://blog.syntaxc4.net
Version: 0.0.1
*/

if( !function_exists("fibonacci") )
{
  function fibonacci($n)
  {
    $a = 0; 
    $b = 1;
    $tmp = 0;
    $numbers[] = 0;
    while($n){
        $tmp = $b; 
        $b = $a + $b;
        $a = $tmp;
        $numbers[] = $a;
        $n--;
    }
  }
}

if( !function_exists("run_fibonacci") )
{
  function run_fibonacci($content)
  {
    fibonacci(40);
    return $content;
  }
  add_filter('the_content', 'run_fibonacci');
}

?>
