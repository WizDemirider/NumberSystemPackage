<?php

Route::get('test/dec/bin', '\Ankitgupta\Testpackage\TestController@DecToBin');
Route::get('test/dec/oct', '\Ankitgupta\Testpackage\TestController@DecToOct');
Route::get('test/dec/hex', '\Ankitgupta\Testpackage\TestController@DecToHex');