<x-layout>
    <x-slot:heading>
        Edit: {{ $task->task }}
    </x-slot:heading>

    <form method="POST" action="/task/{{ $task->id }}/edit">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="task" class="block text-sm font-medium leading-6 text-gray-900">Task</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="task" id="task" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $task->task }}" required>
                            </div>
                        </div>
                        @error('task')
                        <p class="text-sm text-red-500 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-6 flex items-center justify-between gap-x-6">
                        <div class="flex items-center">
                            <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
                        </div>


                        <div class="flex items-center gap-x-6">
                            <a href="/task/{{ $task->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                            <div>
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form method="POST" action="/task/delete/{{ $task->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
