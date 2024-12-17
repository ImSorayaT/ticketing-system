<div class="p-6 bg-sidebar w-fit">
    <h2 class="pb-4 text-xl  block">My Tickets</h2>
    <div class="grid gap-4 auto-cols-fr	 grid-flow-col-dense	">
        @foreach( $tickets_count as $key => $ticket)
            <div class="p-4  text-center bg-[#3e3735] rounded-lg">
                <h3 class="text-sm pb-2 uppercase">{{ $key == 'closed' ? 'closed this week' : $key }}</h3>
                <span class="text-3xl text-unit-pink font-bold">{{ $ticket }}</span>
            </div>
        @endforeach
    </div>
</div>
