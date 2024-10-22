<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;
use App\Models\User;
use App\Http\Requests\UpdateTicketsRequest;
 
class SingleTicket extends Component
{

    public $id;
    public $ticket;
    public $ticketStatus = '';
    public $ticketPriority = '';

    public function mount($id)
    {
        $this->id = $id;
        $this->ticket = Tickets::findOrFail($id);
        $this->ticketStatus = $this->ticket->status;
        $this->ticketPriority = $this->ticket->priority;
    }

    public function update( ){
        $this->ticket->update(
            [
                'status' => $this->ticketStatus,
                'priority' => $this->ticketPriority,
            ]
        );
    }

    public function render()
    {
        $ticket = $this->ticket;
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
                    'name' => ($assignee) ? $assignee->name : '',
                ]
            
        ];
        return view('livewire.single-ticket', compact('ticketArray'));
    }
}
