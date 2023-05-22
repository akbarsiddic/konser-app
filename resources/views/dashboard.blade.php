<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- all data --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 x-data">
                                <div class="overflow-hidden">
                                    <h1 class="font-medium">Ticket Report</h1>
                                    <table
                                        class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr>
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
                                                <th scope="col" class="px-6 py-4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tickets as $Get)
                                            <tr class="border-b dark:border-neutral-500">
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
                                                <td>
                                                    <a href="{{ route('ticket.update', $Get->id) }}"
                                                        class=" inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                        <svg class="w-4 h-4 mr-2 -ml-1" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        Update
                                                    </a>
                                                    |
                                                    <a href="{{ route('ticket.delete', $Get->id) }}"
                                                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                        <svg class="w-4 h-4 mr-2 -ml-1" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                        Delete
                                                    </a>
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

    {{-- report status --}}
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