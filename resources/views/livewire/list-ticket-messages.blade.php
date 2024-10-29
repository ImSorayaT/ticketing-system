<div class="mt-8">
    @foreach($messages as $message)
        <div>
            {{ $message['content']}}
        </div>
    @endforeach
</div>
