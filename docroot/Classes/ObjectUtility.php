<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 9:18 AM
 *
 * Class for utilities for objects, like the pdo connection, starting sessions, etc.
 *
 */
require 'Session.php';

class ObjectUtility
{
    public static $db;
    public static $session;
    public static $model;
    public static $view; // might not need this

    public static function getDb (array $connect = null)
    {
        if(!self::$db) {
            try {
                self::$db = new PDO($connect['db']['dsn'], $connect['db']['user'], $connect['db']['password']);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        return self::$db;
    }

    public static function getSession () {
        if(!self::$session) {
            self::$session = new Session();
        }
        return self::$session;
    }
}