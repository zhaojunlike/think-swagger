<?php
/**
 * @link https://www.xinrennet.com/
 *
 * @copyright Copyright (c) 2018 XINRENNET
 */

Route::get('swagger/ui', '\\westhack\\swagger\\IndexController@index');
Route::any('swagger/api', '\\westhack\\swagger\\ApiController@api');
