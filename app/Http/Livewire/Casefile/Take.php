<?php

namespace App\Http\Livewire\Casefile;

use Livewire\Component;
use App\Models\Casefile;

class Take extends Component
{
    public $caseId;
    public function takeCase(){
        $case = Casefile::where('id', $this->caseId)->first();


        $case->update([
            'status' => "taken",
        ]);

        return redirect('cases');
    }
    public function no(){

        return redirect('/cases');
    }
    public function render()
    {
        return view('livewire.casefile.take');
    }
}
