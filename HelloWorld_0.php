<?php
defined("_VALID_ACCESS") || die('Direct access forbidden'); // - security feature

class Academy_HelloWorld extends Module { 
  // - notice how the class name represents its path

  public function body() { 
    // - modules main view code
    $text = 'Hello World'; // - some text data
    $value = 42; // - some numeric data
    $table = array( // - some table data
      array('Name', 'Age'),
      array('Alice', 25),
      array('Bob', 30),
    );
    print($text); // - display text data
    print($value); // - display numeric data
    print($table); // - display table data
    }
}
?>
