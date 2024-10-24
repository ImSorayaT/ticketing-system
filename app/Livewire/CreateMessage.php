<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class CreateMessage extends Component
{

     
    public $content = '';
    public $threadId;
    public $from;

    public function createComment( ){
        $user = Auth::user();

        $this->from = $user->email;

       dd($this);
    }

    public function render()
    {
        return view('livewire.create-message');
    }
}
