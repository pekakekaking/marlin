<?php

namespace oop\app;


class database
{
    public static $connection;
    public static function connect()
    {
        self::$connection=mysqli_connect("127.0.0.1", "marlin", "marlin", "marlin");
        return self::$connection;
    }
}


