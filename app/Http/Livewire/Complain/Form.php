<?php

namespace App\Http\Livewire\Complain;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Complain;
use Livewire\Redirector;

class Form extends Component
{
    public $complaint_description;

    protected $rules = [
        'complaint_description' => 'required|string|min:6|max:500',
    ];

    
    public function save(): Redirector
    {
        $this->validate();
        $complain=Complain::create([
            'complaint_description' => $this->complaint_description,
            'customer_id' => auth()->user()->id,
            'complaint_date' => Carbon::now(),
        ]);
        $this->reset('complaint_description');
        return to_route('complains.index');
    }
    public function render()
    {
        return view('livewire.complain.form');
    }
}
