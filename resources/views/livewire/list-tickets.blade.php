<ul >
    <li class=""">
        <div class=" mx-auto grid grid-cols-[0.4fr_3fr_1fr_1fr_1fr_1fr_1fr_1fr] bg-[#3e3735]">
            <span class="p-4">ID</span>
            <span class="p-4 shrink">Title</span>
            <span class="p-4">Status</span>
            <span class="p-4">Priority</span>
            <span class="p-4">Requester</span>
            <span class="p-4">Assignee</span>
            <span class="p-4">Created</span>
            <span class="p-4">Updated</span>
        </div>
    </li>
    @foreach( $tickets as $ticket)
       <li class=" even:bg-sidebar "">
            <div class=" mx-auto grid grid-cols-[0.4fr_3fr_1fr_1fr_1fr_1fr_1fr_1fr]">
                <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->id}}</a>
                <a href="/ticket/{{$ticket->id}}" class="p-4 capitalize shrink">{{$ticket->title}}</a>
                <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold"><span class="bg-status-{{$ticket->status}}">{{$ticket->status}}</span></a>
                <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->priority}}</a>
                <a href="/ticket/{{$ticket->id}}" class="p-4">{{$ticket->getRequester->name}}</a>
                <a href="/ticket/{{$ticket->id}}" class="p-4">{{$ticket->getAssignee->name ?? 'Unassigned'}}</a>
                <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->created_at->format('d M H:i') }}</a>
                <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->updated_at->format('d/m/Y H:i') }}</a>
            </div>
        </li>
    @endforeach
</div>
