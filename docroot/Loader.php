<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 7/27/18
 * Time: 3:07 PM
 */
class Loader
{
    public static function init() {
         $loaderPaths = [
             'Classes',
             'Classes/Cards',
             'Classes/Form',
             'Classes/Form/Inputs',
             'Classes/Model',
             'Controllers',
             'Views',
        ];


        spl_autoload_extensions('.php');

        foreach($loaderPaths as $path) {
            set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . DIRECTORY_SEPARATOR .
                $path . DIRECTORY_SEPARATOR);
        }

        spl_autoload_register();
    }
}