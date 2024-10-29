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

        $this->from = $user->id;
        
        Messages::create(
            [
                'threadId' => $this->threadId,
                'from' => $this->from,
                'content' => $this->content,
            ]
        );
    }

    public function render()
    {
        return view('livewire.create-message');
    }
}
