<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;

class ListTickets extends Component
{
    public function render()
    {

        $tickets = Tickets::get()->map( function($ticket){
            return [
                'id'=> $ticket->id,
                'title'=> $ticket->title,
            ];
        });
        // dd($tickets);
        return view('livewire.list-tickets')->with(['tickets' => $tickets]);
    }
}
