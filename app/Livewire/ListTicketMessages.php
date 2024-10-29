<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Messages;
use App\Models\User;

class ListTicketMessages extends Component
{
    public $id;    
    public function render()
    {
        $getMessages = Messages::where('threadId', '=', $this->id)->with('user')->get();
        $messages= [];

        // dd($getMessages);
        $messages = $getMessages->map(function($message){
            
            return [
                'title' => $message->title,
                'content' => $message->content,
                'author' => $message->user->name
            ];
        });
        // dd($messages);
        return view('livewire.list-ticket-messages')->with(['messages' => $messages]);
    }
}
