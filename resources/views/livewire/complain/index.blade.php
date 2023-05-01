<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Complains</h4>
                        <a href="{{ route('complains.create') }}" class="btn btn-success float-right mb-4">Create</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Complain Date</th>
                                            <th>Description</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($complains as $key => $complain)
                                            <tr>
                                                <td class="text-bold-500">{{ $key+1 }}</td>
                                                <td>{{ $complain->complaint_date }}</td>
                                                <td>{{ $complain->complaint_description }}</td>
                                                @role('admin')
                                                <td>
                                                    <a class="btn btn-sm btn-success" href="{{ route('complains.manage',$complain->id) }}">Assigned Problem</a>
                                                    <a href="#" class="btn btn-sm btn-danger" wire:click="delete({{ $complain->id }})"> Delete</a>
                                                </td>
                                                @endrole
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $complains->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
