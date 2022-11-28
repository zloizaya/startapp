<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Starter Template (Basic)</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

Add modules:
~~~
- Yii2mod RBAC (https://github.com/yii2mod/yii2-rbac)
- Yii2-adminlte3 from hail812 (https://github.com/hail812/yii2-adminlte3)
- Yii2-phone-formatter (https://github.com/Myks92/yii2-phone-formatter)
- Yii2-module-files (https://github.com/floor12/yii2-module-files)
~~~

Add themes:
~~~
themes/basic
~~~

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![build](https://github.com/yiisoft/yii2-app-basic/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-basic/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      migrations/         contains migrations files
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      themes/             contains themes files
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.4.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist zloizaya/yii2-startapp you_name_app
~~~

~~~
http://localhost/you_name_app/web/
~~~

After install you must run migrations:

~~~
php yii migrate/up --migrationPath=@yii/rbac/migrations
yii migrate --migrationPath=@vendor/floor12/yii2-module-files/src/migrations/
php yii migrate
~~~

Migrations will create the necessary tables in the database. A user will also be created:

~~~
admin
admin@startapp.loc
asd123
~~~