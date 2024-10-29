<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Messages;
use App\Models\User;

class ListTicketMessages extends Component
{
    public $messages;    
    public function render()
    {
        // dd($messages);
        return view('livewire.list-ticket-messages')->with(['messages' => $this->messages]);
    }
}
