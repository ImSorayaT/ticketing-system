<div class="p-6 bg-sidebar w-fit">
    <h2 class="pb-4 text-xl  block">My Tickets</h2>
    <div class="grid gap-4 auto-cols-fr	 grid-flow-col-dense	">
        
        <div class="p-4  text-center bg-[#3e3735] rounded-lg">
            <h3 class="text-sm pb-2 uppercase">Open</h3>
            <span class="text-3xl text-unit-pink font-bold">{{ isset($tickets_count['open']) ? $tickets_count['open'] : '0' }}</span>
        </div>
        
        <div class="p-4  text-center bg-[#3e3735] rounded-lg">
            <h3 class="text-sm pb-2 uppercase">Pending</h3>
            <span class="text-3xl text-unit-pink font-bold">{{ isset($tickets_count['pending']) ? $tickets_count['pending'] : '0' }}</span>
        </div>

        <div class="p-4  text-center bg-[#3e3735] rounded-lg">
            <h3 class="text-sm pb-2 uppercase">Closed this week</h3>
            <span class="text-3xl text-unit-pink font-bold">{{ isset($tickets_count['closed']) ? $tickets_count['closed'] : '0' }}</span>
        </div>

    </div>
</div>
