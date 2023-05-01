<?php

namespace App\Http\Livewire\Complain;

use App\Models\Complain;
use App\Models\SupportTeam;
use Livewire\Component;

class Manage extends Component
{
    public Complain $complain;
    public $assigned_to = '';
    protected $rules = [
        'assigned_to' => 'required',
    ];
    public function save()
    {
        $this->validate();
        $this->complain->update([
            'assigned_to' => $this->assigned_to
        ]);
        return to_route('complains.index');
    }
    public function render()
    {
        $teamSupports = SupportTeam ::all();
        return view('livewire.complain.manage',compact('teamSupports'));
    }
}
