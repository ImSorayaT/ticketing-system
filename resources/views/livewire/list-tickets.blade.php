<ul >
    <li class=""">
        <div class="max-w-screen-xl mx-auto flex">
            <span class=" p-2 basis-auto grow">Title</span>
            <span class="p-2 basis-36">Status</span>
            <span class="p-2 basis-36">Priority</span>
            <span class="p-2 basis-36">Assigner</span>
            <span class="p-2 basis-36">Assignee</span>
        </div>
    </li>
    @foreach( $tickets as $ticket)
       <li class=" even:bg-[#3e3735] "">
            <div class="max-w-screen-xl mx-auto flex">
                <a href="/ticket/{{$ticket['id']}}" class=" p-2 capitalize basis-auto grow">{{$ticket['title']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class=" p-2 uppercase font-bold basis-36 ">{{$ticket['status']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2 uppercase font-bold basis-36 ">{{$ticket['priority']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2 basis-36 ">{{$ticket['assigner']['name']}}</a>
                <a href="/ticket/{{$ticket['id']}}" class="p-2 basis-36 ">{{$ticket['assignee']['name']}}</a>
            </div>
        </li>
    @endforeach
</div>
