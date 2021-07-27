<?php
function printFormatted(callable $format, $str) {
  echo $format($str);
  echo "<br>";
}

class MyClass {
  public static function ask($str) {
    return $str . "?";
  }
  public function brackets($str) {
    return "[$str]";
  }
}

// An anonymous function
$func = function($str) { return substr($str, 0, 5); };
printFormatted($func , "Hello World");

// A string containing the name of a function
printFormatted("strtoupper", "Hello World");

// An array describing a static class method
printFormatted(["MyClass", "ask"], "Hello World");

// An array describing an object method
$obj = new MyClass();
printFormatted([$obj, "brackets"], "Hello World");
