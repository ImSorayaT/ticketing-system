<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;
use App\Models\User;
 
class SingleTicket extends Component
{

    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }


    public function render()
    {
        $ticket = Tickets::findOrFail($this->id);
        $assigner = User::find($ticket->assigner);
        $assignee = User::find($ticket->assignee);

        $ticketArray = [
            
                'id' => $ticket->id,
                'title' => $ticket->title,
                'status' => $ticket->status,
                'priority' => $ticket->priority,
                'content' => $ticket->request_content,
                'assigner' => [
                    'name' => $assigner->name,
                ],
                'assignee' => [
                    'name' => $assignee->name,
                ]
            
        ];
        return view('livewire.single-ticket', compact('ticketArray'));
    }
}
