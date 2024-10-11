<ul>
    @foreach( $tickets as $ticket)
       <li>
            <span>{{$ticket['title']}}</span>
            <span>{{$ticket['assigner']['name']}}</span>
            <span>{{$ticket['assignee']['name']}}</span>
        </li>
    @endforeach
</div>
