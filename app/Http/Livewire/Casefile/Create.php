<?php

namespace App\Http\Livewire\Casefile;

use Livewire\Component;
use App\Models\Casefile;
use RealRashid\SweetAlert\Facades\Alert;

class Create extends Component
{
    public $title, $description;

    public function add(){
        $this->validate([
            'title' => ['required','string',],
            'description' => ['required','string'],
        ]);

        Casefile::create([
            'user_id' => auth()->user()->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => "unsolved",
        ]);

        Alert::success("CASE ADDED", "Please wait for our detective to review your case.");
        return redirect('/profile');

    }
    public function render()
    {
        return view('livewire.casefile.create');
    }
}
