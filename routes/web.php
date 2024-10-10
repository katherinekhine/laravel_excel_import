<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('import-excel', [EmployeeController::class, 'import_excel']);
Route::post('import-excel', [EmployeeController::class, 'import_excel_post']);
