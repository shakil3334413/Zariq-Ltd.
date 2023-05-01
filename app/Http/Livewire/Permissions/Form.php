<?php

namespace App\Http\Livewire\Permissions;

use Livewire\Component;
use Livewire\Redirector;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Form extends Component
{
    public Permission $permission;
    public bool $editing = false;
    public $role_name = "";
    public function mount(Permission $permission): void
    {
        $this->permission = $permission;
        if ($this->permission->exists) {
            $this->editing = true;
        }
    }
    public function save(): Redirector
    {
        $this->validate();
        $this->permission->save();
        return to_route('permissions.index');
    }
    public function assignedRole()
    {
       if($this->permission->hasRole($this->role_name)){
        return back();
       }
       $this->permission->assignRole($this->role_name);
      return back();
    }
    public function delete(Role $roles)
    {
        if($this->permission->hasRole($roles)){
           $this->permission->removeRole($roles);
           return back();
        }
        return back();
    }
 
    protected function rules(): array
    {
        return [
            'permission.name' => [
                'string',
                'required',
            ],
        ];
    }
    public function render()
    {
        $roles = Role::all();
        return view('livewire.permissions.form',compact('roles'));
    }
}
