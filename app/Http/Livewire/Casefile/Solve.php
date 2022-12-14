<?php

namespace App\Http\Livewire\Casefile;

use Livewire\Component;
use App\Models\Casefile;

class Solve extends Component
{
    public $caseId;
    public function closeCase(){
        $case = Casefile::where('id', $this->caseId)->first();


        $case->update([
            'status' => "solved",
        ]);

        return redirect('cases');
    }
    public function render()
    {
        return view('livewire.casefile.solve');
    }
}
