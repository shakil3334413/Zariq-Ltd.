<?php

namespace App\Http\Livewire\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public function delete(Permission $permission)
    {
        $permission->delete();
    }

    public function render()
    {
        $permissions = Permission::latest()->paginate();
        return view('livewire.permissions.index',compact('permissions'));
    }
}
