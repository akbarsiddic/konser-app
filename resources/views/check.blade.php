<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Check in') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 x-data">
                                <div class="overflow-hidden">
                                    <form action="{{ route('ticket.checkIn') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ticket_id">
                                                Ticket ID
                                            </label>
                                            <input
                                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                id="ticket_id" name="ticket_id" type="text"
                                                placeholder="Enter ticket ID" required>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                type="submit">
                                                Check In
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12" id="check">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 x-data">
                                <div class="overflow-hidden">
                                    <table
                                        class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                        <h1 class="font-medium">Status Report</h1>
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    Ticket ID
                                                </th>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    First Name
                                                </th>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    Last Name
                                                </th>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    Phone
                                                </th>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    Email
                                                </th>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    Quantity
                                                </th>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    Type
                                                </th>
                                                <th scope="col" class="border-r px-6 py-4 dark:border-neutral-500">
                                                    Date
                                                </th>
                                                <th scope="col" class="px-6 py-4">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tickets as $Get)
                                            <tr class="border-b dark:border-neutral-500">
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->id}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->firstname}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->lastname}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->phone}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->email}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->quantity}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->type}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                                                    {{$Get->date}}</td>
                                                <td
                                                    class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">

                                                    @if ($Get->status == 'used')
                                                    <span class="text-red-600">{{$Get->status}}</span>
                                                    @else
                                                    <span class="text-green-600">{{$Get->status}}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>