<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public function delete(Role $role)
    {
        $role->delete();
    }

    public function render()
    {
        $roles = Role::whereNotIn('name',['admin'])->get();
        return view('livewire.roles.index',compact('roles'));
    }
}
