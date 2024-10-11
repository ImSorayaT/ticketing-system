<ul>
    @foreach( $tickets as $ticket)
       <li>
            {{$ticket['title']}}
        </li>
    @endforeach
</div>
