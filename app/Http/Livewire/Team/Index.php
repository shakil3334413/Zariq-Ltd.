<?php

namespace App\Http\Livewire\Team;

use App\Models\TeamMember;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $teams = TeamMember::latest()->paginate(10);
        return view('livewire.team.index',compact('teams'));
    }
}
