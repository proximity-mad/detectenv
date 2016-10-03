<?php

namespace proximity\detectenv;

/**
 * Class DetectEnv
 * @package proximity\detectEnv
 */
class DetectEnv
{
    public $defaultEnv = 'prod';
    public function __construct($params)
    {
        $serverName = $_SERVER['SERVER_NAME'];
        if(isset($params[$serverName])){
            return $params[$serverName];
        }
        return $this->defaultEnv;
    }
}