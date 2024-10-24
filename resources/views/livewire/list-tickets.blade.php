<ul >
    <li class=""">
        <div class=" mx-auto flex">
            <span class=" p-2 basis-[900px] shrink">Title</span>
            <span class="p-2 basis-36">Status</span>
            <span class="p-2 basis-36">Priority</span>
            <span class="p-2 basis-36">Requester</span>
            <span class="p-2 basis-36">Assignee</span>
        </div>
    </li>
    @foreach( $tickets as $ticket)
       <li class=" even:bg-[#3e3735] "">
            <div class=" mx-auto flex">
                <a href="/ticket/{{$ticket['id']}}" class=" p-2 capitalize basis-[900px] shrink">{{$ticket['title']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class=" p-2 uppercase font-bold basis-36 ">{{$ticket['status']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2 uppercase font-bold basis-36 ">{{$ticket['priority']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2 basis-36 ">{{$ticket['requester']['name']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2 basis-36 ">{{$ticket['assignee']['name']}}</a>
            </div>
        </li>
    @endforeach
</div>
