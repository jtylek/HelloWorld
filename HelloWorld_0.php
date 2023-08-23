<?php

defined("_VALID_ACCESS") || die('Direct access forbidden'); // - security feature

class Academy_HelloWorld extends Module { // - notice how the class name represents its path

  public function body() { // - modules main code

    print('<H1>Hello Karina!</H1><p>Welcome Epesi Academy.</p>');
    print('<p>### Lesson 1<br><br>Hello World in Epesi to demonstrate low-code and no-code PHP development in Epesi..</p>');

    }
}

?>
