<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

//Route::get('/', fn () => view('welcome'))->name('welcome');

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/software/install', [App\Http\Controllers\WelcomeController::class, 'install'])->name('software.install');

Route::namespace('DataCenter')->prefix('data-center')->name('data-center.')->group(function () {
    Route::namespace('Organization')->prefix('organization')->name('organization.')->group(function () {
        Route::get('/', [\App\Http\Controllers\DataCenter\Organization\OrganizationController::class, 'index'])->name('index');
        Route::namespace('Tenancy')->prefix('tenancy')->name('tenancy.')->group(function () {
            Route::get('/tenant', [\App\Http\Controllers\DataCenter\Organization\Tenancy\TenantsController::class, 'index'])->name('tenants.index');
            Route::get('/tenant/{tenant}', [\App\Http\Controllers\DataCenter\Organization\Tenancy\TenantsController::class, 'show'])->name('tenants.show');
        });
    });
});

Route::get('/locale/{locale}', \App\Http\Controllers\LocaleController::class)->name('set.locale');

Route::get('login/github', [\App\Http\Controllers\Auth\SocialiteLoginController::class, 'redirectToGithubProvider'])->name('sociolite.github.login');
Route::get('login/github/callback', [\App\Http\Controllers\Auth\SocialiteLoginController::class, 'handleGithubProviderCallback'])->name('sociolite.github.callback');

//Route::get('login/facebook', 'Auth\LoginController@redirectToFacebookProvider');
//Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookProviderCallback');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tos', [App\Http\Controllers\HomeController::class, 'index'])->name('tos');

Route::post('/switch-user-back', [\App\Http\Controllers\Admin\Users\SwitchUserController::class, 'back'])->name('switch-user.back');
