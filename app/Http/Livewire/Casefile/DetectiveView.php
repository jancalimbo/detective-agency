<?php

namespace App\Http\Livewire\Casefile;

use Livewire\Component;
use App\Models\Casefile;

class DetectiveView extends Component
{
    public function loadAllCases(){
        $cases = Casefile::get();

        return compact('cases');
    }
    public function render()
    {
        return view('livewire.casefile.detective-view', $this->loadAllCases());
    }
}
