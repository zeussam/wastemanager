<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GarbageCollectorController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ViewreviewsController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/schedule', function () {
    return view('schedulecollection');
});

Route::post('/schedule', [ScheduleController::class, 'store'])->name('schedule.store');
Route::get('/pending', [ScheduleController::class, 'display'])->name('pending.display');
Route::get('/review', [ScheduleController::class, 'rate'])->name('review.rate');

Route::get('/viewreviews', [ViewreviewsController::class, 'index'])->name('reviews.index');

Route::delete('admin/roles', [RoleController::class, 'destroy'])->name('admin.roles.destroy')->middleware('web');
Route::delete('admin/permissions', [PermissionController::class, 'destroy'])->name('admin.permissions.destroy')->middleware('web');

Route::get('/garbage', [GarbageCollectorController::class, 'index'])->name('garbage');
Route::put('/update-status/{id}', [GarbageCollectorController::class, 'updateStatus'])->name('updateStatus');

Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(DisableBackBtn::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::resource('/roles',RoleController::class);
     Route::resource('/permissions',PermissionController::class);
});
Route::get('/staff', function () {
    return view('staff');
})->middleware(['auth', 'role:staff'])->name('staff');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/roles/{role}/permissions',[RoleController::class,'givePermission'])->name('admin.roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}',[RoleController::class,'revokePermission'])->name('admin.roles.permissions.revoke');
     Route::delete('/permissions/{permission}/roles/{role}',[PermissionController::class,'removeRole'])->name('admin.permissions.roles.remove');
     Route::post('/permissions/{permission}/roles',[PermissionController::class,'assignRole'])->name('admin.permissions.roles');
     Route::get('/users',[UserController::class,'index'])->name('admin.users.index');
     Route::get('/users/{user}',[UserController::class,'show'])->name('admin.users.show'); 
     Route::delete('/users/{user}',[UserController::class,'destroy'])->name('admin.users.destroy');
     Route::post('/users/{user}/roles',[UserController::class,'assignRole'])->name('admin.users.roles');
     Route::delete('/users/{user}/roles/{role}',[UserController::class,'removeRole'])->name('admin.users.roles.remove');
      Route::post('/users/{user}/permissions',[UserController::class,'givePermission'])->name('admin.users.permissions');
     Route::delete('/users/{user}/permissions/{permission}',[UserController::class,'revokePermission'])->name('admin.users.permissions.revoke');
});

Auth::routes(['verify' => true]);

require __DIR__.'/auth.php';
