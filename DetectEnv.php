<?php

namespace proximity\detectenv;

/**
 * Class DetectEnv
 * @package proximity\detectEnv
 */
class DetectEnv
{
    public static $defaultEnv = 'prod';

    /**
     * Return env depending on server name
     * @param $params
     * @return string
     */
    public static function get($params){
        $serverName = $_SERVER['SERVER_NAME'];
        if(isset($params[$serverName])){
            return $params[$serverName];
        }
        return self::$defaultEnv;
    }
}