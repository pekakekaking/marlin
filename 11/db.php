<?php

class dbbbb
{
    public function connect()
    {
        return mysqli_connect("127.0.0.1", "marlin", "marlin", "marlin");
    }
}