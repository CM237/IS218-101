<?php
class Autoloader
{
    public static function loader($class)
    {
        $filename = strtolower($class) . '.php';
        $file =/'https://web.njit.edu/~cm237/IS218/folder/code/'. $filename;
        if (!file_exists($file))
        {
            return false;
            
            print_r "error, email not sent";
        }
        include $file;
    }
}

