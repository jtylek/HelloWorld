<?php

defined("_VALID_ACCESS") || die('Direct access forbidden');

class Custom_HelloWorldCommon extends ModuleCommon {

    public static function menu() {

        return array(__('Module') => array('__submenu__' => 1, __('Hello World') => array())); // - this will output as Module->HelloWorld in the main menu

    }
}

?>
