<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Permissions</h4>
                        <a href="{{ route('permissions.create') }}" class="btn btn-success float-right mb-4">Create</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>NAME</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $key => $permission)
                                            <tr>
                                                <td class="text-bold-500">{{ $key+1 }}</td>
                                                <td>{{ $permission->name }}</td>
                                                <td>
                                                    <a class="btn btn-sm-success" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                                                    <a href="#" class="btn btn-sm-danger" wire:click="delete({{ $permission->id }})"> Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $permissions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
