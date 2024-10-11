<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;
use App\Models\User;

class ListTickets extends Component
{
    public function render()
    {

        $tickets = Tickets::get()->map( function($ticket){
            $assigner = User::find($ticket->assigner);
            $assignee = User::find($ticket->assignee);
            return [
                'id' => $ticket->id,
                'title' => $ticket->title,
                'assigner' => [
                    'name' => $assigner->name,
                ],
                'assignee' => [
                    'name' => $assignee->name,
                ]
            ];
        });
        // dd($tickets);
        return view('livewire.list-tickets')->with(['tickets' => $tickets]);
    }
}
