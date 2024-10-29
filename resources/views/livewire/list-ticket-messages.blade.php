<div class="mt-8">
    @foreach($messages as $message)
        <div>
            {{ $message['content']}}
            {{ $message['user']['name']}}
        </div>
    @endforeach
</div>
