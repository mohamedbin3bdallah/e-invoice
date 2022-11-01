<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
	Route::prefix('place')->group(function () {
		Route::post('/states/{id}', [App\Http\Controllers\PlaceController::class, 'getStatesFromCountry'])->name('get.country.states');
		Route::post('/cities/{id}', [App\Http\Controllers\PlaceController::class, 'getCitiesFromState'])->name('get.state.cities');
	});
	
	Route::get('/languages', [App\Http\Controllers\LanguageController::class, 'index'])->name('languages');
	Route::prefix('language')->group(function () {
		Route::get('/add', [App\Http\Controllers\LanguageController::class, 'create'])->name('language-add');
		Route::post('/store', [App\Http\Controllers\LanguageController::class, 'store'])->name('language-store');
		Route::get('/file/{local}/show', [App\Http\Controllers\LanguageController::class, 'fileShow'])->name('language-file-show');
		Route::post('/file/{local}/update', [App\Http\Controllers\LanguageController::class, 'fileUpdate'])->name('language-file-update');
	});
	
	Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles');
	Route::prefix('role')->group(function () {
		Route::post('/all', [App\Http\Controllers\RoleController::class, 'get'])->name('roles-get');
		Route::get('/add', [App\Http\Controllers\RoleController::class, 'create'])->name('role-add');
		Route::post('/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role-store');
		Route::get('/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role-edit');
		Route::post('/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('role-update');
		Route::delete('/delete/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role-delete');
		Route::get('/permissions/{id}/show', [App\Http\Controllers\RoleController::class, 'permissionsShow'])->name('permissions-show');
		Route::post('/permissions/{id}/update', [App\Http\Controllers\RoleController::class, 'permissionsUpdate'])->name('permissions-update');
	});
	
	Route::prefix('users')->group(function () {
		Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('users');
		Route::get('/add', [App\Http\Controllers\UserController::class, 'create_excel'])->name('users-add');
		Route::post('/store', [App\Http\Controllers\UserController::class, 'store_excel'])->name('users-store');
	});
	Route::prefix('user')->group(function () {
		Route::post('/all', [App\Http\Controllers\UserController::class, 'get'])->name('users-get');
		Route::get('/add', [App\Http\Controllers\UserController::class, 'create'])->name('user-add');
		Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('user-store');
		Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user-edit');
		Route::post('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user-update');
		Route::delete('/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user-delete');
		Route::post('/company/{id}', [App\Http\Controllers\UserController::class, 'getBranchesRolesFromCompany'])->name('branches.roles.get.company');
	});
	
	Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies');
	Route::prefix('company')->group(function () {
		Route::post('/all', [App\Http\Controllers\CompanyController::class, 'get'])->name('companies-get');
		Route::get('/add', [App\Http\Controllers\CompanyController::class, 'create'])->name('company-add');
		Route::post('/store', [App\Http\Controllers\CompanyController::class, 'store'])->name('company-store');
		Route::get('/edit/{id}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('company-edit');
		Route::post('/update/{id}', [App\Http\Controllers\CompanyController::class, 'update'])->name('company-update');
		Route::delete('/delete/{id}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('company-delete');
	});
	
	Route::prefix('items')->group(function () {
		Route::get('/', [App\Http\Controllers\ItemController::class, 'index'])->name('items');
		Route::get('/add', [App\Http\Controllers\ItemController::class, 'create_excel'])->name('items-add');
		Route::post('/store', [App\Http\Controllers\ItemController::class, 'store_excel'])->name('items-store');
	});
	
	Route::prefix('documents')->group(function () {
		Route::get('/', [App\Http\Controllers\DocumentController::class, 'index'])->name('documents');
		Route::get('/package/{package_id}/data/{length}', [App\Http\Controllers\DocumentController::class, 'package_data'])->name('documents-package-data');
		Route::post('/search', [App\Http\Controllers\DocumentController::class, 'search'])->name('documents-search');
		Route::post('/package', [App\Http\Controllers\DocumentController::class, 'package'])->name('documents-package');
		Route::post('/status/change', [App\Http\Controllers\DocumentController::class, 'status_change'])->name('document-status-change');
	});
	Route::prefix('document')->group(function () {
		Route::get('/add', [App\Http\Controllers\DocumentController::class, 'create'])->name('document-add');
		Route::post('/store', [App\Http\Controllers\DocumentController::class, 'store'])->name('document-store');
	});
});

require __DIR__.'/auth.php';
