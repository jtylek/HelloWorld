<?php
defined("_VALID_ACCESS") || die('Direct access forbidden'); // - security feature

class Academy_HelloWorld extends Module { 
  // - notice how the class name represents its path

  public function body() { 
         print('Hello World!');
        }
?>
