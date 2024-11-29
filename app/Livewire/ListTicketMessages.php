<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Messages;
use App\Models\User;

class ListTicketMessages extends Component
{
    public $messages;    

    #[On('addComment')]
    public function appendNewComment($newComment){
        $getNewMessage = Messages::with(['user'])->findOrFail($newComment);
        $this->messages->push($getNewMessage);
    }

    public function render()
    {
        return view('livewire.list-ticket-messages');
    }
}
