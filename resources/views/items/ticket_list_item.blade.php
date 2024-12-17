<li class=" even:bg-sidebar "">
    <div class=" mx-auto grid grid-cols-[0.4fr_3fr_1fr_1fr_1fr_1fr_1fr]">
        <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->id}}</a>
        <a href="/ticket/{{$ticket->id}}" class="p-4 capitalize shrink">{{$ticket->title}}</a>
        <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold"><span class="bg-status-{{$ticket->status}}">{{$ticket->status}}</span></a>
        <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->priority}}</a>
        <a href="/ticket/{{$ticket->id}}" class="p-4">{{$ticket->getRequester->name}}</a>
        <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->created_at->format('d M H:i') }}</a>
        <a href="/ticket/{{$ticket->id}}" class="p-4 uppercase font-bold">{{$ticket->updated_at->format('d/m/Y H:i') }}</a>
    </div>
</li>