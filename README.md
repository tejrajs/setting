Setting
=======
Yii2 Framework Basic Setting - Development package

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tejrajs/setting "dev-master"
```

or add

```
"tejrajs/setting": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

### Migration

Migration run

```php
yii migrate --migrationPath=@tejrajs/setting/migrations
```

### Config frontend modules in backend/config/main.php

```php
    //'defaultRoute' => 'setting', //set setting as default route optional
    'modules' => [
        'setting' => [
    		'class' => 'tejrajs\setting\Module',
    		'controllerNamespace' => 'tejrajs\setting\controllers'
    	],
    ],
```

### Access Url
1. backend : http://you-domain/backend/web/setting