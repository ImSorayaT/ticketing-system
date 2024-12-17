<div class="mt-8">
    @foreach($messages as $message)
        <div class=" mb-6 last:mb-0 bg-sidebar p-2 py-4">
            {!! html_entity_decode($message['content']) !!}
            <div class="mt-3 text-sm">
                {{ $message['user']['name']}} ({{ $message['user']['email']}})
            </div>
        </div>
    @endforeach
</div>
