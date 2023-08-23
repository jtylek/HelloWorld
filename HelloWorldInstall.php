<?php

defined("_VALID_ACCESS") || die('Direct access forbidden');

class Academy_HelloWorldInstall extends ModuleInstall {

    public function install() { // Here you can place the installation process for the module

        return true; // Return true on success and false on failure

    }

    public function uninstall() { // Here you can place uninstallation process for the module

        return true; // Return true on success and false on failure

    }

    public function info() { // Returns basic information about the module which will be available in the epesi Main Setup

        return array( 'Author'=>'Janusz Tylek',
            'License'=>'<MIT>',
                    'Description'=>'<Hello World tutorial>');

    }

    public function simple_setup() { // Indicates if this module should be visible on the module list in Main Setup's simple view

        return array('package' => __('HelloWorld'), 'version'=>'1.0'); // - now the module will be visible as "HelloWorld" in simple_view

    }

    public function requires($v) { // Returns list of modules and their versions, that are required to run this module

        return array();

    }

    public function version() { // Return version name of the module

        return array('1.0');

    }
}

?>
