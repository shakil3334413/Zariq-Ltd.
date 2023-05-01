<?php

namespace App\Http\Livewire\Complain;

use App\Models\Complain;
use Livewire\Component;

class Index extends Component
{

    public function delete(Complain $complain)
    {
        $complain->delete();
    }

    public function render()
    {
        if(auth()->user()->hasRole('admin')){
            $complains = Complain::latest()->paginate(20);
        }
        $complains = Complain::where('customer_id',auth()->user()->id)->latest()->paginate(20);
        return view('livewire.complain.index',compact('complains'));
    }
}
