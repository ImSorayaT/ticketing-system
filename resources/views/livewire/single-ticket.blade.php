<div>
    <h1 class="text-4xl">{{ $ticketArray['title']}}</h1>
    <div class="text-sm mb-4 mt-6 space-y-1">
        <p class="flex gap-4"><span class="basis-16 ">Status:</span> <span class="uppercase font-bold">{{ $ticketArray['status']}}</span></p>
        <p class="flex gap-4"><span class="basis-16 ">Priority:</span> <span class="uppercase font-bold">{{ $ticketArray['priority']}}</span></p>
        <p class="flex gap-4"><span class="basis-16 ">Assigner:</span> {{ $ticketArray['assigner']['name']}}</p>
        <p class="flex gap-4"><span class="basis-16 ">Assignee:</span> {{ $ticketArray['assignee']['name']}}</p>
    </div>

    <p> {{ $ticketArray['content']}}</p>
</div>
