# detectenv
Simple PHP Class to get environment depending on server name

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist proximity/detectenv "*"
```

or add

```
"proximity/detectenv": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
$hosts = [
    'mydevhost.dev'=>'dev',
    'mytesthost.com'=>'test',
    'myprodhost.com'=>'prod',
];
$env = \proximity\detectenv\DetectEnv::get($hosts);
```

By default is not host is found it will return false, you can change the default host by adding the second parameter:
```php
$env = \proximity\detectenv\DetectEnv::get($hosts, 'prod');
```
