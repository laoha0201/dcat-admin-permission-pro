<?php

use DcatAdmin\PermissionPro\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('permission-pro', Controllers\PermissionProController::class . '@index');
Route::post('permission-pro/import', Controllers\PermissionProController::class . '@import')->name('permission-pro.import');
