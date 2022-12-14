<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CaseFileController;
use App\Http\Controllers\EquipmentsController;

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

//Auth routes
Route::get('/',[AuthController::class, 'loginForm'])->name('login'); 
Route::post('/',[AuthController::class, 'login']); 
Route::get('/register',[AuthController::class, 'registerForm']);
Route::post('/register',[AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout']);




//crud video routes
Route::group(['middleware'=> ['auth', 'verified']],function(){
    
    Route::prefix('casefile')->group(function(){
        Route::controller(CaseFileController::class)->group(function (){
            
            Route::get('/create', 'create')->name('file-a-case')->middleware('role:client');
            Route::get('/view/{casefile}', 'view')->name('view-case');
            Route::get('/take/{casefile}', 'take')->name('take-case')->middleware('role:detective');
            Route::get('/solve/{casefile}', 'solve')->name('solve-case')->middleware('role:detective');
        });
    });

    Route::controller(SiteController::class)->group(function (){
        Route::get('/home', 'home')->name('home')->middleware('role:client');
        Route::get('/cases', 'cases')->name('all-cases')->middleware('role:detective');
        Route::get('/profile', 'userProfile')->name('user-profile');
        Route::get('/profile/{user}', 'specificUser')->name('specific-user');
        Route::get('/users', 'allUsers')->name('all-users')->middleware('role:detective');
    });
    
});










