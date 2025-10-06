<x-layout>
    <x-slot:heading> Task </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $task->task }}</h2>

    <div class="mt-5">
        {{-- @can('edit', $task) --}}
            <x-button href="/task/{{ $task->id }}/edit"> Edit Task </x-button>
        {{-- @endcan --}}
    </div>

</x-layout>
