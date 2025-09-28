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
                        <a href="/employer/update/{{ $employer->id }}" class="text-blue-600 hover:underline">
                            Update
                        </a>
                        <a href="/employer/delete/{{ $employer->id }}" class="text-blue-600 hover:underline">
                            Delete
                        </a>
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
