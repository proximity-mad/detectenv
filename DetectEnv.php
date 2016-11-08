<?php

namespace proximitymad\detectenv;

/**
 * Class DetectEnv
 * @package proximitymad\detectEnv
 */
class DetectEnv
{
    /**
     * Return env depending on server name
     * @param $params
     * @param bool|string $default
     * @return string
     */
    public static function get($params, $default = null){
        $serverName = isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:false;
        if($serverName && isset($params[$serverName])){
            return $params[$serverName];
        }
        return $default;
    }
}