<div>
    <h1 class="text-4xl mb-6">{{ $ticketArray['title']}}</h1>
    <form class="text-sm mb-8 space-y-2 border-b border-unit-coral pb-4	" wire:submit="update">
        <input type="submit" class="bg-unit-coral block p-2 float-right	rounded-xl text-white cursor-pointer" value="Update Ticket">
        <p class="flex gap-4">
            <span class="basis-16 ">Status:</span> 
            <select class="uppercase bg-transparent appearance-none font-bold" wire:model="ticketStatus" name="ticketStatus">
                @foreach(App\Enum\TicketStatus::cases() as $option)
                    <option value="{{ $option->value }}">{{ $option->value }}</option>
                @endforeach 
            </select>
        </p>
        <p class="flex gap-4">
            <span class="basis-16 ">Priority:</span> 
            <select class="uppercase appearance-none bg-transparent font-bold" wire:model="ticketPriority" name="ticketPriority">
                @foreach(App\Enum\TicketPriority::cases() as $option)
                    <option value="{{ $option->value }}">{{ $option->value }}</option>
                @endforeach
            </select>
        </p>
        <p class="flex gap-4"><span class="basis-16 ">Assigner:</span> {{ $ticketArray['assigner']['name']}}</p>
        <p class="flex gap-4"><span class="basis-16 ">Assignee:</span> {{ $ticketArray['assignee']['name']}}</p>
    </form>

    <p> {{ $ticketArray['content']}}</p>
</div>
