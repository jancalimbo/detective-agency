<?php

namespace App\Http\Livewire\Casefile;

use Livewire\Component;
use App\Models\Casefile;

class ViewDetails extends Component
{
    public $caseId;

    public function loadCase(){
        $file = Casefile::where('id', $this->caseId)->get();

        return compact('file');
    }

    public function render()
    {
        return view('livewire.casefile.view-details', $this->loadCase());
    }
}
