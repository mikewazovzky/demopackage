<?php

Route::get('demo/test', function () {
    return 'test';
});

Route::get('demo/hello', function () {
    return Demopackage::hello();
});

Route::get('name/{name?}', '\Mikewazovzky\Demopackage\Http\DemopackageController@name');

Route::get('demo', '\Mikewazovzky\Demopackage\Http\DemopackageController@index');