<ul >
    <li class="grid grid-cols-5 gap-4 odd:bg-[#fca5a5]"">
        <span class="w-[500px]">Title</span>
        <span>Status</span>
        <span>Priority</span>
        <span>Assigner</span>
        <span>Assignee</span>
    </li>
    @foreach( $tickets as $ticket)
       <li class="grid grid-cols-5 gap-4 odd:bg-[#fca5a5]"">
            <span class="w-[500px]">{{$ticket['title']}}</span>
            <span class="w-10">{{$ticket['status']}}</span>
            <span>{{$ticket['priority']}}</span>
            <span>{{$ticket['assigner']['name']}}</span>
            <span>{{$ticket['assignee']['name']}}</span>
        </li>
    @endforeach
</div>
