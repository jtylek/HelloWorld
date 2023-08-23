<?php

defined("_VALID_ACCESS") || die('Direct access forbidden'); // - security feature

class Academy_HelloWorld extends Module { // - notice how the class name represents its path

  public function body() { // - modules main code

    print('<H1>Hello Janusz!</H1><p>Welcome to low-code and no-code PHP programming in Epesi.</p>');

    }
}

?>
