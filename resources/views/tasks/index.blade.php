<x-layout>
    <x-slot:heading> Tasks </x-slot:heading>

    <div class="space-y-4">
        @foreach ($tasks as $task)

        <div class="flex items-center justify-between px-4 py-6 border border-gray-200 rounded-lg">

            {{-- Task details --}}
            <a href="/task/{{ $task->id }}">
                <div>
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $task->user->name }}
                    </div>
                    <h1>{{ $task->task }}</h1>
                </div>
            </a>
            {{-- Action buttons (aligned left) --}}
            <div class="flex space-x-2">
                <form method="POST" action="/delete/{{ $task->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white text-sm font-semibold rounded-md shadow hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400">
                        Done
                    </button>

                    <button type="submit" class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-md shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-5">
        {{ $tasks->links() }}
    </div>
</x-layout>
