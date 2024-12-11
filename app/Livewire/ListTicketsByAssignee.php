<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;

class ListTicketsByAssignee extends Component
{

    public $assigneeId;    

    public function mount($assigneeId)
    {
        $this->assigneeId = $assigneeId;
    }

    public function render()
    {
        $tickets = Tickets::with(['getRequester', 'getAssignee'])->where('assignee', $this->assigneeId)->get();
        return view('livewire.list-tickets')->with(['tickets' => $tickets]);
    }
}
