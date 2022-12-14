<?php

namespace App\Http\Livewire\Casefile;

use Livewire\Component;
use App\Models\Casefile;

class Index extends Component
{
    public function loadCases(){
        $cases = Casefile::where('user_id', auth()->user()->id)->get();

        return compact('cases');
    }
    public function render()
    {
        return view('livewire.casefile.index', $this->loadCases());
    }
}
