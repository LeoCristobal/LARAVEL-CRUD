<x-layout>
    <x-slot:heading>
        Employers
    </x-slot:heading>

    <div class="px-4 py-6">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">Name</th>
                    <th class="px-4 py-2 border">Salary</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Phone Number</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employers as $employer)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border">{{ $employer->name }}</td>
                    <td class="px-4 py-2 border">{{ $employer->salary }}</td>
                    <td class="px-4 py-2 border">{{ $employer->email }}</td>
                    <td class="px-4 py-2 border">{{ $employer->phone_number }}</td>
                    <td class="px-4 py-2 border text-center">
                        <!-- Update button -->
                        <a href="/employer/update/{{ $employer->id }}" class="text-white bg-indigo-600 hover:bg-indigo-500 rounded-md px-3 py-2 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mr-2">
                            Update
                        </a>

                        <!-- Delete button -->
                        <form action="/employer/delete/{{ $employer->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-500 rounded-md px-3 py-2 text-sm font-semibold shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="mt-5">
            {{ $employers->links() }}
        </div>
    </div>

</x-layout>
