<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\moduleMasterController;
use App\Http\Controllers\roleMasterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/logout',[AuthController::class, 'Logout'])->name('user.logout');
Route::get('user/profile',[AuthController::class, 'Profile'])->name('user.profile');
Route::get('user/password',[AuthController::class, 'Password'])->name('user.password');
Route::get('user/session',[AuthController::class, 'Session'])->name('user.session');
Route::get('Users/All',[roleMasterController::class, 'allUsers'])->name('user.all');
Route::get('create-new-user', [AuthController::class,'addUser'])->name('user.add');
Route::post('user/create',[roleMasterController::class,'NewUser'])->name('user.create');
// User master 
Route::get('user/delete/{id}',[roleMasterController::class, 'DeleteUser']);
Route::get('/user/edit/{id}',[roleMasterController::class, 'UpdateRole']);
Route::post('/user/update/{id}',[roleMasterController::class, 'UpdateRoledata']);
Route::get('/users/edit/{id}',[roleMasterController::class, 'UpdateUser']);

// Role Master 
Route::get('/roles',[roleMasterController::class, 'Role'])->name('roles');
Route::get('/role/add',[roleMasterController::class, 'AddRole'])->name('role.add');
Route::post('/role/add',[roleMasterController::class, 'StoreRole'])->name('store.role');
Route::get('/role/delete/{id}',[roleMasterController::class, 'DeleteRole']);
Route::get('/role/edit/{id}',[roleMasterController::class, 'EditRole']);
Route::post('/role/update/{id}',[roleMasterController::class, 'UpdateRole']);


// Module Master
Route::get('/modules',[moduleMasterController::class, 'Modules'])->name('modules');
Route::get('/module/add',[moduleMasterController::class, 'AddModules'])->name('module.add');
Route::post('/module/add',[moduleMasterController::class, 'StoreModules'])->name('store.module');
Route::get('/modules/delete/{id}',[moduleMasterController::class, 'DeleteModules']);
Route::get('/modules/edit/{id}',[moduleMasterController::class, 'EditModules']);
Route::post('/modules/update/{id}',[moduleMasterController::class, 'UpdateModules']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
