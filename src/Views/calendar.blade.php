<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-4">
    <div class="flex justify-between items-center mb-4">
        <button wire:click="prevMonth" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">&larr;</button>
        <h2 class="text-lg font-semibold">{{ \Carbon\Carbon::create($currentYear, $currentMonth)->translatedFormat('F Y') }}</h2>
        <button wire:click="nextMonth" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">&rarr;</button>
    </div>

    <div class="grid grid-cols-7 gap-1 text-center font-semibold">
        @foreach(['Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab', 'Dom'] as $day)
            <div class="py-2">{{ $day }}</div>
        @endforeach
    </div>

    <div class="grid grid-cols-7 gap-1 text-center">
        @foreach ($weeks as $week)
            @foreach ($week as $day)
                <div class="py-2 {{ $day ? 'bg-blue-100 hover:bg-blue-200 cursor-pointer' : '' }} rounded">
                    {{ $day ?? '' }}
                </div>
            @endforeach
        @endforeach
    </div>
</div>
