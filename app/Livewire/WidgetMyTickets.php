<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;

class WidgetMyTickets extends Component
{
    public function render()
    {
        $userId = Auth::id();
        $date = date_create()->modify('-7 days')->format('Y-m-d');
        
        $tickets = Tickets::where('assignee', $userId)
        ->whereNot( function($query) use ($date){
            $query->where('status', 'closed')
            ->where('updated_at', '<', $date);
        })
        ->pluck('status')->toArray();

        $tickets_count = array_count_values($tickets);
                
        return view('livewire.widget-my-tickets')->with(['tickets_count' => $tickets_count]);
    }
}
