@extends('index')

@section('title', 'Edit')

@section('content')
<div class="bg-gradient-to-b from-orange-300 to-orange-600 h-screen">
    <div class="p-4 m-4">

        <form class="w-full max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
            action="{{ route('ticket.edit', $ticket->id) }}" method="post">
            @csrf

            <h1 class="text-4xl py-2 font-bold">Edit Form</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="grid-first-name" name="firstname" type="text" placeholder="Jane"
                    value="{{ $ticket->firstname }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="grid-last-name" name="lastname" type="text" placeholder="Doe" value="{{$ticket->lastname}}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-phone">
                    Phone Number
                </label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="grid-phone" name="phone" type="tel" value="{{$ticket->phone}}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-email">
                    Email
                </label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="grid-email" name="email" type="email" value="{{$ticket->email}}">
            </div>
            <div class="mb-4 flex">
                <div class="mr-2 w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-qty">
                        Quantity
                    </label>
                    <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="grid-qty" name="quantity" type="number" placeholder="0" min="0" max="5"
                        value="{{$ticket->quantity}}">
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-class">
                        Class
                    </label>
                    <div class="relative">
                        <select name="type"
                            class="block appearance-none w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="grid-class" required>
                            <option value="{{$ticket->type}}" disabled>Select Class</option>
                            @foreach ($ticket_type as $Get)
                            <option value="{{ $Get->type }}" selected>{{ $Get->type }}</option>
                            @endforeach
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9 11l3-3 3 3m0 6l-3-3-3 3">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-date">
                    Date
                </label>
                <input
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="grid-date" name="date" type="date" value="{{$ticket->date}}">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection