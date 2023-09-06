<?php

defined("_VALID_ACCESS") || die('Direct access forbidden'); // - security feature

class Academy_HelloWorld extends Module { // - notice how the class name represents its path

  public function body() { // - modules main code

    print('<H1>Hello Janusz!</H1><H2>Welcome to Epesi Academy.</H2>');
    print('<p><strong>### Lesson 1 ###</strong><br><br>Hello World in <a href="https://epe.si">Epesi</a> to demonstrate low-code and no-code PHP development.</p>');

    print('Hello World');
    print('<BR><BR>It\'s easy, it\'s <STRONG>Epesi!</STRONG>');
    }
}

?>
