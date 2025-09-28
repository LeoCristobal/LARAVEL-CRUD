<x-layout>
    <x-slot:heading>
        Add Employer
    </x-slot:heading>

    <div class="flex items-center justify-center min-h-screen">
        <form method="POST" action="/jobs">
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <input id="title" type="text" name="title" placeholder="Leo"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required/>
                    </div>
                </div>

                <div>
                    <label for="salary" class="block text-sm font-medium text-gray-900">Salary</label>
                    <div class="mt-2">
                        <input id="salary" type="text" name="salary" placeholder="$10,000"
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required/>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
                <a href="/jobs" class="text-sm font-semibold text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-layout>
