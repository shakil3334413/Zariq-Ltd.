<?php

namespace App\Http\Livewire\Team;

use Livewire\Component;
use Livewire\Redirector;
use App\Models\TeamMember;
use App\Models\SupportTeam;

class Form extends Component
{
    public $team_member_name;
    public $team_member_email;
    public $team_member_phone;
    public $team_member_job_description;
    public $support_team_id;

    protected $rules = [
        'team_member_name' => 'required|string|min:3|max:20',
        'team_member_email' => 'required|string',
        'team_member_phone' => 'required|string',
        'team_member_job_description' => 'required|string|min:3',
        'support_team_id' => 'required',
    ];
    public function save(): Redirector
    {
        $this->validate();
        $complain=TeamMember::create([
            'team_member_name' => $this->team_member_name,
            'team_member_email' => $this->team_member_email,
            'team_member_phone' => $this->team_member_phone,
            'team_member_job_description' => $this->team_member_job_description,
            'support_team_id' => $this->support_team_id,
        ]);
        return to_route('teams.index');
    }

    public function render()
    {
        $supportTeams = SupportTeam::all();
        return view('livewire.team.form',compact('supportTeams'));
    }
}
