<div >
    @foreach( $tickets as $key=>$ticket_group)
        <h2 class="bg-[#3e3735] p-4 py-2 capitalize">{{$key ? $key : 'Unassigned'}}</h2>
        <ul>
            @foreach( $ticket_group as $ticket)
                @include('items.ticket_list_item', ['$ticket' => 'ticket'])
            @endforeach
        </ul>
    @endforeach
</div>
