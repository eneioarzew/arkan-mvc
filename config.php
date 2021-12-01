<?php
// Set error_reporting to 0 in the line below to enable showing of PHP errors.
// It is adviseable to disable error reporting on production version to prevent security leaks.
error_reporting(1);
/** */

class Config {

    private static $URI_OFFSET;
    private static $host;
    private static $username;
    private static $password;
    private static $db_name;

    function __construct() {
        // Environment options are either OFFSET-1 or OFFSET-2 in all caps.
        // OFFSET-1 offsets (removes a part of) the URI by 1 from the left.
        // OFFSET-2 offsets (removes a part of) the URI by 2 from the left.
        self::$URI_OFFSET = 'OFFSET-2';
        /** */


        // Up to the user to implement database connection.
        // MySQLi connections are compatible.
        self::$host = 'localhost';
        self::$username = 'root';
        self::$password = '';
        self::$db_name = '';
        /** */
    }

    public function openDbConnection() {
        return new mysqli(self::$host, self::$username, self::$password, self::$db_name);
    }

    public function getURIOffset() {
        return self::$URI_OFFSET;
    }

}