# detectenv
Simple PHP Class to get environment depending on server name

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist proximitymad/detectenv "1.0.*"
```

or add

```
"proximitymad/detectenv": "1.0.*"
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
$env = \proximitymad\detectenv\DetectEnv::get($hosts);
```

By default if no host is found it will return null, you can change the default host by adding the second parameter:
```php
$env = \proximitymad\detectenv\DetectEnv::get($hosts, 'prod');
```
