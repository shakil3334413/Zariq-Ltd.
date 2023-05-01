<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Role</h4>
                        <a href="{{ route('roles.create') }}" class="btn btn-success float-right mb-4">Create</a>
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
                                        @foreach ($roles as $key => $role)
                                            <tr>
                                                <td class="text-bold-500">{{ $key+1 }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    <a class="btn btn-sm-success" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                                    <a href="#" class="btn btn-sm-danger" wire:click="delete({{ $role->id }})"> Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
