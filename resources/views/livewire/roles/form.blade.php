<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Role</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" wire:submit.prevent="save">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="first-name-vertical">Name</label>
                                            <input type="text" wire:model="role.name" id="first-name-vertical" class="form-control" name="role.name" placeholder="Role Name">
                                            <x-input-error :messages="$errors->get('role.name')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div>
                        <h2>Role Permissions Assigned</h2>
                        @if($role->permissions)
                            @foreach ($role->permissions as $rolePermission)
                                <span>{{ $rolePermission->name }} <button wire:click="delete({{ $rolePermission->id }})" class="btn btn-sm btn-danger">Delete</button></span>
                            @endforeach
                        @endif
                        <br><br>
                        <form class="form form-vertical" wire:submit.prevent="permission">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Permission</label>
                                        </div>
                                        <select class="form-control" id="inputGroupSelect01"  wire:model="permission_name" name="permission_name" required>
                                            <option selected>Choose Permission</option>
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('permission')" class="mt-2" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-end mt-10">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Assigned</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

