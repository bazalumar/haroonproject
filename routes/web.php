<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SalaryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(FormController::class, '')->group(function () {
    Route::get('addnew', 'addnew')->name('route-addnew');
    Route::get('viewall', 'viewAll')->name('route-viewall');
    Route::put('updateform/{id}', 'updateForm')->name('route-updateform');
    Route::delete('deleteform/{id}', 'deleteForm')->name('route-deleteform'); // Changed to 'deleteform'
    Route::get('editform/{id}', 'editForm')->name('route-editform'); // Changed to 'editform'
    Route::post('saveform', 'saveForm')->name('route-saveform'); // Changed to 'saveform'
});

Route::controller(SalaryController::class, '')->group(function () {
    Route::get('addnewsalary', 'addnewsalary')->name('route-addnewsalary');
    Route::get('viewallsalary', 'viewAllsalary')->name('route-viewallsalary');
    Route::put('updatesalary/{id}', 'updateSalary')->name('route-updatesalary'); // Changed to 'updatesalary'
    Route::delete('deletesalary/{id}', 'deleteSalary')->name('route-deletesalary'); // Changed to 'deletesalary'
    Route::get('editsalary/{id}', 'editSalary')->name('route-editsalary'); // Changed to 'editsalary'
    Route::post('savesalary', 'saveSalary')->name('route-savesalary'); // Changed to 'savesalary'
});

