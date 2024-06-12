<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//   query form
Route::controller(FormController::class, '')->group(function () {
    Route::get('addnew', 'addnew')->name('route-addnew');
    Route::get('viewall', 'viewAll')->name('route-viewall');
    Route::put('updateform/{id}', 'updateForm')->name('route-updateform');
    Route::delete('deleteform/{id}', 'deleteForm')->name('route-deleteform'); // Changed to 'deleteform'
    Route::get('editform/{id}', 'editForm')->name('route-editform'); // Changed to 'editform'
    Route::post('saveform', 'saveForm')->name('route-saveform'); // Changed to 'saveform'

});

// salary form 
Route::controller(SalaryController::class, '')->group(function () {
    Route::get('addnewsalary', 'addnewsalary')->name('route-addnewsalary');
    Route::get('viewallsalary', 'viewAllsalary')->name('route-viewallsalary');
    Route::put('updatesalary/{id}', 'updateSalary')->name('route-updatesalary'); // Changed to 'updatesalary'
    Route::delete('deletesalary/{id}', 'deleteSalary')->name('route-deletesalary'); // Changed to 'deletesalary'
    Route::get('editsalary/{id}', 'editSalary')->name('route-editsalary'); // Changed to 'editsalary'
    Route::post('savesalary', 'saveSalary')->name('route-savesalary'); // Changed to 'savesalary'
});
// contact form 
Route::controller(ContactController::class, '')->group(function () {
    Route::get('addnewcontact', 'addNewContact')->name('route-addnewcontact');
    Route::get('viewallcontact', 'viewAllContact')->name('route-viewallcontact');
    Route::put('updatecontact/{id}', 'updateContact')->name('route-updatecontact');
    Route::delete('deletecontact/{id}', 'deleteContact')->name('route-deletecontact');
    Route::get('editcontact/{id}', 'editContact')->name('route-editcontact');
    Route::post('savecontact', 'saveContact')->name('route-savecontact');
});

// front-end controller

Route::controller(FrontendController::class)->group(function () {
    Route::get('home', 'homeIndex')->name('route-home');
    Route::get('blog', 'blogIndex')->name('route-blog');
    Route::get('services', 'servicesIndex')->name('route-services');
    Route::get('loan', 'loanIndex')->name('route-loan');
    Route::get('contact', 'contactIndex')->name('route-contact');
    Route::post('contact/submit', 'contactSubmit')->name('route-contact-submit');
    Route::post('loanform', 'loanForm')->name('route-loanform');
    Route::get('thanks', 'thanksIndex')->name('route-thanks');
    Route::get('autocar-services', 'carservicedetails')->name('route-autocar-services');
    Route::get('credit-services', 'creditservicedetails')->name('route-credit-services');
    Route::get('home-services', 'homeservicedetails')->name('route-home-services');
    Route::get('business-services', 'businessservicedetails')->name('route-business-services');
    Route::get('education-services', 'educationservicedetails')->name('route-education-services');
    Route::get('personal-services', 'personalservicedetails')->name('route-personal-services');
    Route::get('term-condtion', 'termcondtion')->name('route-termcondtion');
    Route::get('policy-condtion', 'policycondtion')->name('route-policycondtion');
    Route::get('privacy-condtion', 'privacycondtion')->name('route-privacycondtion');
  
});



Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('blogs', [AdminBlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('blogs/create', [AdminBlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('blogs', [AdminBlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('blogs/{blog}/edit', [AdminBlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('blogs/{blog}', [AdminBlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');
});




Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');


// emails controller
Route::controller(EmailController::class)->group(function () {
    Route::get('addnewemail', 'addNewemail')->name('route-addnewemail');
    Route::get('viewallemail', 'viewAllemail')->name('route-viewallemail');
    Route::put('updateemail/{id}', 'updateemail')->name('route-updateemail');
    Route::delete('deleteemail/{id}', 'deleteemail')->name('route-deleteemail');
    Route::get('editemail/{id}', 'editemail')->name('route-editemail');
    Route::post('saveemail', 'saveemail')->name('route-saveemail');

});



