<ul >
    <li class=" odd:bg-[#fca5a5]"">
        <div class="max-w-screen-xl mx-auto grid grid-cols-5 gap-4">
            <span class=" p-2">Title</span>
            <span class="p-2">Status</span>
            <span class="p-2">Priority</span>
            <span class="p-2">Assigner</span>
            <span class="p-2">Assignee</span>
        </div>
    </li>
    @foreach( $tickets as $ticket)
       <li class=" odd:bg-[#fca5a5] "">
            <div class="max-w-screen-xl mx-auto grid grid-cols-5 gap-4">
                <a href="/ticket/{{$ticket['id']}}" class=" p-2">{{$ticket['title']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class=" p-2">{{$ticket['status']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2">{{$ticket['priority']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2">{{$ticket['assigner']['name']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2">{{$ticket['assignee']['name']}}</a>
            </div>
        </li>
    @endforeach
</div>
