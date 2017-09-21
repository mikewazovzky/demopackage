[![Build Status](https://travis-ci.org/mikewazovzky/demopackage.svg?branch=master)](https://travis-ci.org/mikewazovzky/demopackage)
[![Coverage Status](https://coveralls.io/repos/github/mikewazovzky/demopackage/badge.svg?branch=master&foo=bar)](https://coveralls.io/github/mikewazovzky/demopackage?branch=master)
<h2 align="center">
	<img src="https://laravel.com/assets/img/components/logo-laravel.svg">
</h2>
### Project:
mikewazovzky\demopackage
### Description
Laravel Package Template/Demo: Step-by-step Laravel Package creation
#### Version: 0.0.1
#### Change log:
0.0.1 initial project scaffolding

#### Documentation
See PHPDoc blocks in the code

#### Installation.
- pull the package into Laravel project,
```
composer require mikewazovzky/demopackage
```
#### Testing package.
Create test laravel project
1. copy `.env` file from `/tests/config/`
2. update composer.json autoload section
```
"psr-4": {
    "App\\": "app/",
    "Mikewazovzky\\Demopackage\\": "packages/Mikewazovzky/Demopackage/src/"
}
```
3. For Laravel 5.4. or below add Packege Server Provider and Facade alias to `config/app.php`
providers section
```
\Mikewazovzky\Demopackage\DemopackageServiceProvider::class
```
aliases section
```
'Demopackage' => Mikewazovzky\Demopackage\DemoFacade::class
```
Run PHPUnit from the project folder
```
laravel-project/vendor/bin/phpunit
```



