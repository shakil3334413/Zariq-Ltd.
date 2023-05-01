<div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Team </h4>
                        <a href="{{ route('teams.create') }}" class="btn btn-success float-right mb-4">Create</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Job Description</th>
                                            <th>Support Team Name</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teams as $key => $team)
                                            <tr>
                                                <td class="text-bold-500">{{ $key+1 }}</td>
                                                <td>{{ $team->team_member_name }}</td>
                                                <td>{{ $team->team_member_email }}</td>
                                                <td>{{ $team->team_member_phone }}</td>
                                                <td>{{ $team->team_member_job_description }}</td>
                                                <td>{{  $team->supportTeam?->team_name }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $teams->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
