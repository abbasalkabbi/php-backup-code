<?php
class MyClass {
  public function hello($name) {
    echo "<h1>Hello World!  :$name";
  }
}

class AnotherClass extends MyClass {
}

$obj = new AnotherClass();
$obj->hello('abbas');
?>