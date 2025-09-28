<x-layout>
    <x-slot:heading>
        Edit Employer: {{ $employer->name }}
    </x-slot:heading>

    <form method="POST" action="/employer/update/{{ $employer->id }}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900">name</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                </div>
                                <input id="name" type="text" name="name" placeholder="Leo" class="block min-w-0 grow bg-white py-1.5 px-3 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{ $employer->name }}" required />
                            </div>
                        </div>
                        @error('name')
                        <p class="text-s text-red-500 font-semibold mt-1"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                </div>
                                <input id="salary" type="text" name="salary" placeholder="$10,000" class="block min-w-0 grow bg-white py-1.5 px-3 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{ $employer->salary }}" required />
                            </div>
                        </div>
                        @error('salary')
                        <p class="text-s text-red-500 font-semibold mt-1"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                </div>
                                <input id="email" type="text" name="email" placeholder="Leo" class="block min-w-0 grow bg-white py-1.5 px-3 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{ $employer->email }}" required />
                            </div>
                        </div>
                        @error('email')
                        <p class="text-s text-red-500 font-semibold mt-1"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="phone_number" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
                            <div class="mt-2">
                                <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">
                                    </div>
                                    <input id="phone_number" type="text" name="phone_number" placeholder="Leo" class="block min-w-0 grow bg-white py-1.5 px-3 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{ $employer->phone_number }}" required />
                                </div>
                            </div>
                            @error('phone_number')
                            <p class="text-s text-red-500 font-semibold mt-1"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-between gap-x-6">

            <div class="flex items-center gap-x-6">
                <!-- Cancel -->
                <a href="/employers" class="text-sm font-semibold leading-6 hover:text-gray-700">
                    Cancel
                </a>

                <!-- Update -->
                <div>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm
                        hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2
                        focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update
                    </button>
                </div>

            </div>
        </div>
    </form>
</x-layout>
