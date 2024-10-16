<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\TicketsController;

class ListTickets extends Component
{

    public function render()
    {
        $tickets = TicketsController::showList();        
        return view('livewire.list-tickets')->with(['tickets' => $tickets]);
    }
}
