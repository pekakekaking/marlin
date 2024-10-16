<?php

namespace oop\app;


class database
{
    public static $connection;
    public static function connect()
    {
        self::$connection=mysqli_connect("127.0.0.1", "marlin", "AfiDAr3E6LfD6i4S", "marlin");
        return self::$connection;
    }
}


