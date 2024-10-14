<ul >
    <li class="grid grid-cols-5 gap-4 odd:bg-[#fca5a5]"">
        <span class=" p-2">Title</span>
        <span class="p-2">Status</span>
        <span class="p-2">Priority</span>
        <span class="p-2">Assigner</span>
        <span class="p-2">Assignee</span>
    </li>
    @foreach( $tickets as $ticket)
       <li class="grid grid-cols-5 gap-4 odd:bg-[#fca5a5]"">
            <span class=" p-2">{{$ticket['title']}}</span>
            <span class=" p-2">{{$ticket['status']}}</span>
            <span class="p-2">{{$ticket['priority']}}</span>
            <span class="p-2">{{$ticket['assigner']['name']}}</span>
            <span class="p-2">{{$ticket['assignee']['name']}}</span>
        </li>
    @endforeach
</div>
