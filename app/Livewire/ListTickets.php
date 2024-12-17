<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;


class ListTickets extends Component
{
    public $grouped;    

    public function render()
    {
        $this->grouped = ($this->grouped == 'assignee') ? 'getAssignee.name' : $this->grouped ;
        $tickets = Tickets::with(['getRequester', 'getAssignee'])->get()->groupBy($this->grouped);
        
        //make sure unassigned are on top
        $unassigned = $tickets[''];
        unset($tickets['']);
        $tickets->prepend($unassigned);

        return view('livewire.list-tickets')->with(['tickets' => $tickets, 'grouped' => $this->grouped]);
    }
}
