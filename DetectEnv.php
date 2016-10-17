<?php

namespace proximity\detectenv;

/**
 * Class DetectEnv
 * @package proximity\detectEnv
 */
class DetectEnv
{
    /**
     * Return env depending on server name
     * @param $params
     * @param bool|string $default
     * @return string
     */
    public static function get($params, $default = false){
        $serverName = $_SERVER['SERVER_NAME'];
        if(isset($params[$serverName])){
            return $params[$serverName];
        }
        return $default;
    }
}