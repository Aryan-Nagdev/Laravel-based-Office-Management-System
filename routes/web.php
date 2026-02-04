<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;

Route::get('/', function () {
    return redirect('/companies');
});

Route::resource('companies', CompanyController::class);
Route::resource('employees', EmployeeController::class);

/* AJAX Route → Load managers based on company */
Route::get('/get-managers/{company_id}', function ($company_id) {
    return Employee::where('company_id', $company_id)->get();
});
