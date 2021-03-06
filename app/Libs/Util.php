<?php
namespace app\Libs;

use Log;

class Util
{

    /**
     * Util constructor.
     *
     */
    public function __construct()
    {

    }


    /**
     * @param $class
     * @param $function
     * @param $message
     *
     * @return string
     */
    public function generateLogMessage($message, $class=null, $function=null)
    {
        $trace = debug_backtrace($limit = 2);
        
        if (is_null($class)) {
            $class = $trace[2]['class'];
        }

        if (is_null($function)) {
            $function = $trace[2]['function'];
        }
        
        return sprintf("%s.%s() --- %s", $class, $function, $message);
        
    }


}