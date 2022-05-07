<?php

use DcatAdmin\PermissionPlus\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('permission-plus', Controllers\PermissionPlusController::class . '@index');
Route::post('permission-plus/import', Controllers\PermissionPlusController::class . '@import')->name('permission-plus.import');
