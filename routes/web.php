<?php

use App\Http\Controllers\AssignPermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolePermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('roles', [RolePermissionController::class, 'openRolesPage'])->name('roles.index');
Route::get('roles/create', [RolePermissionController::class, 'openCreateRolePage'])->name('roles.create');
Route::post('roles', [RolePermissionController::class, 'storeRole'])->name('roles.store');

Route::get('permissions', [RolePermissionController::class, 'openpermissionsPage'])->name('permissions.index');
Route::get('permissions/create', [RolePermissionController::class, 'openCreatePermissionPage'])->name('permissions.create');
Route::post('permissions', [RolePermissionController::class, 'storePermission'])->name('permissions.store');

Route::get('assign-permissions', [AssignPermissionController::class, 'assignPermissions']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
