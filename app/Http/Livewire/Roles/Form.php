<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Livewire\Redirector;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Form extends Component
{
    public Role $role;
    public bool $editing = false;
    public $permission_name = "";


    public function mount(Role $role): void
    {
        $this->role = $role;
        if ($this->role->exists) {
            $this->editing = true;
        }
    }
    public function permission()
    {
       if($this->role->hasPermissionTo($this->permission_name)){
        return back();
       }
      
       $this->role->givePermissionTo($this->permission_name);
      return back();
    }
    public function save(): Redirector
    {
        $this->validate();
 
        $this->role->save();
        return to_route('roles.index');
    }
    public function delete(Permission $permission)
    {
        if($this->role->hasPermissionTo($permission)){
           $this->role->revokePermissionTo($permission);
           return back();
        }
        return back();
    }
 
    protected function rules(): array
    {
        return [
            'role.name'=> [
                'string',
                'required',
            ],
        ];
    }
    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.roles.form',compact('permissions'));
    }
}
