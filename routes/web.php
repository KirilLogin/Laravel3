<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/test_database', function () {
     $employee = new Employee();
     $employee->name = 'John Doe';
     $employee->position = 'Manager';
     $employee->age = 35;
     $employee->save();

    return 'Сотрудник успешно добавлен!';
});
