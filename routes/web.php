<?php

use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Permissions\Index as PermissionIndex;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Permissions\Form as PermissionForm;
use App\Http\Livewire\Roles\Form as RoleForm;
use App\Http\Livewire\Roles\Index as RoleIndex;
use App\Http\Livewire\Complain\Index as ComplainIndex;
use App\Http\Livewire\Complain\Form as ComplainForm;
use App\Http\Livewire\Complain\Manage as ComplainManage;
use App\Http\Livewire\Team\Form as TeamForm;
use App\Http\Livewire\Team\Index as TeamIndex;

Route::get('/',Home::class)->name('home')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/roles',RoleIndex::class)->name('roles.index');
    Route::get('/roles/form',RoleForm::class)->name('roles.create');
    Route::get('roles/{role}', RoleForm::class)->name('roles.edit'); 
    Route::get('/permissions',PermissionIndex::class)->name('permissions.index');
    Route::get('/permissions/form',PermissionForm::class)->name('permissions.create');
    Route::get('/permissions/{permission}', PermissionForm::class)->name('permissions.edit'); 
    Route::get('/complains',ComplainIndex::class)->name('complains.index');
    Route::get('/complains/create',ComplainForm::class)->name('complains.create');
    Route::get('/complains/{complain}/manage',ComplainManage::class)->name('complains.manage');
    Route::get('/teams',TeamIndex::class)->name('teams.index');
    Route::get('/teams/create/',TeamForm::class)->name('teams.create');
});

require __DIR__.'/auth.php';
