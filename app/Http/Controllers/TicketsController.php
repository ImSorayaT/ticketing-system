<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTicketsRequest;
use App\Http\Requests\UpdateTicketsRequest;
use App\Models\Tickets;
use App\Models\User;
use App\Enum\UserRoles;
use App\Notifications\TicketCreated;


class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public static function showList()
    {

        $tickets = Tickets::with(['getRequester', 'getAssignee'])->get()->map( function($ticket){
            return [
                'id' => $ticket->id,
                'title' => $ticket->title,
                'status' => $ticket->status,
                'priority' => $ticket->priority,
                'requester' => [
                    'name' => $ticket->getRequester->name,
                ],
                'assignee' => [
                    'name' => ($ticket->getAssignee) ? $ticket->getAssignee->name : '' ,
                ]
            ];
        });

    
        return $tickets;
    }

    public static function addTicketFromEmail(Request $request){
        $emailSender = $request->input('emailSender');
        $user = User::where('email', $emailSender)->first();
        if(!$user){
            $user = User::create(
                [
                    'name' => $emailSender,
                    'email' => $emailSender,
                    'user_role' => UserRoles::Inactive->value,
                ]
            );
        }

        $email = [
            'title' => $request->input('title'),
            'requester' => $user->id,
            'request_content' => urldecode($request->input('content')),
            'threadId' => $request->input('threadId'),
        ];

// dd($email);
        Tickets::create($email);

        $user->notify(new TicketCreated());

        return $email;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketsRequest $request, Tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
