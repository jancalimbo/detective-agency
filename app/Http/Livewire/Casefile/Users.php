<?php

namespace App\Http\Livewire\Casefile;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $userId;
    
    public function loadUsers(){
        $users = User::get();

        return compact('users');
    }
    public function render()
    {
        return view('livewire.casefile.users', $this->loadUsers());
    }
}
