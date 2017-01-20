<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(['namespace' => 'Rockers\MYDATE\Controllers', 'prefix' => 'rockers/mydate'], function () {
    Route::get('/', ['as' => 'mydate_path', 'uses' => 'MYDATEController@index']);
});