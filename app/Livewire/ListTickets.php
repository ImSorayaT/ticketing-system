<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;


class ListTickets extends Component
{

    public function render()
    {
        
        $tickets = Tickets::with(['getRequester', 'getAssignee'])->get()->groupBy('getAssignee.name');
        
        //make sure unassigned are on top
        $unassigned = $tickets[''];
        unset($tickets['']);
        $tickets->prepend($unassigned);

        return view('livewire.list-tickets')->with(['tickets' => $tickets]);
    }
}
