<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Messages;
use App\Models\Tickets;


class CreateMessage extends Component
{

     
    public $content = '';
    public $threadId;
    public $from;

    public function createComment( ){
        $user = Auth::user();
        // $ticket = Tickets::where('id');

        $this->from = 2;
        
        // $this->form->createMessage();
        
        
       $createMessage =  Messages::create(
            [
                'threadId' => $this->threadId,
                'from' => $this->from,
                'content' => $this->content,
            ]
        );

        $this->dispatch('addComment', $createMessage->id);
        $this->content = '';

        session()->flash('message', 'Message sent.');

    }

    public function render()
    {
        return view('livewire.create-message');
    }
}
