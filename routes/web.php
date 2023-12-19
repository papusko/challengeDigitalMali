<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\IdeaController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminUserController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('teams', TeamController::class);
Route::resource('teams_member', TeamMemberController::class);
Route::get('teams_member/create/{team_id}', [TeamMemberController::class, 'create'])->name('teams_member.create');
Route::resource('idea', IdeaController::class);
Route::post('/idea/{id}/validate', [IdeaController::class, 'validateIdea'])->name('idea.validate');

// pour la creation des admins et superAdmin
// Route::get('/admin/register', [RegisterController::class, 'adminView'])->name('admin.register.view');
// Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register.create');

// Vue et création d'un utilisateur avec le rôle "superAdmin"
Route::get('/super-admin/register', [RegisterController::class, 'superAdminView'])->name('superAdmin.register.view');
Route::post('/super-admin/register', [RegisterController::class, 'createSuperAdmin'])->name('superAdmin.register.create');

Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/store', [AdminUserController::class, 'store'])->name('admin.users.store');