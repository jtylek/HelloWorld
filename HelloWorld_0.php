<?php

defined("_VALID_ACCESS") || die('Direct access forbidden'); // - security feature

class Academy_HelloWorld extends Module { // - notice how the class name represents its path

  public function body() { // - modules main code

    print('<H1>Hello Janusz!</H1><H2>Welcome to Epesi Academy.</H2>');
    print('<p><strong>### Lesson 1 ###</strong><br><br>Hello World in Epesi to demonstrate low-code and no-code PHP development.</p>');

    print('This is a test');
    }
}

?>
