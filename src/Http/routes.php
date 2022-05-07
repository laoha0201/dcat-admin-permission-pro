<?php

use DcatAdmin\PermissionPlus\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('permission-plus', Controllers\PermissionProController::class . '@index');
Route::post('permission-plus/import', Controllers\PermissionProController::class . '@import')->name('permission-plus.import');
