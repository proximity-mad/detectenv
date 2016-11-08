<?php


use PHPUnit\Framework\TestCase;
use proximitymad\detectenv\DetectEnv;

class DetectEnvTest extends TestCase
{
    public function testDetectEnvEmpty()
    {
        $envs = [];
        $this->assertEquals(DetectEnv::get($envs), null);
    }

    public function testDetectEnv()
    {
        $envs = ['localhost' => 'dev'];
        $this->assertNotEquals(DetectEnv::get($envs), 'dev');
    }

    public function testDetectEnvFake()
    {
        $_SERVER['SERVER_NAME'] = 'localhost';
        $envs = ['localhost' => 'dev'];
        $this->assertEquals(DetectEnv::get($envs), 'dev');
    }

    public function testDetectEnvProdFake()
    {
        $_SERVER['SERVER_NAME'] = 'mydomain.dev';
        $envs = ['localhost' => 'dev', 'mydomain.dev' => 'prod'];
        $this->assertEquals(DetectEnv::get($envs), 'prod');
    }

    public function testDetectEnvDefault()
    {
        $envs = ['localhost' => 'dev'];
        $this->assertEquals(DetectEnv::get($envs, 'dev'), 'dev');
    }
}
