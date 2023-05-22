<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <header class="gradient-to-b from-white to-slate-600 py-4">
        <nav class="flex justify-between items-center w-[92%]  mx-auto">
            <div>
                <h1>ConcertApp</h1>
            </div>
            <div class="flex items-center gap-6">
                <a href="/login" class="bg-green-500 text-white px-5 py-2 rounded-full hover:bg-green-800">Sign
                    in</a>
            </div>
    </header>

    <div class="container-fluid">
        @yield('content')
    </div>

    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <p class="text-sm">&copy; 2023 ConcertApp</p>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-sm hover:text-gray-400">Privacy Policy</a></li>
                <li><a href="#" class="text-sm hover:text-gray-400">Terms of Service</a></li>
                <li><a href="#" class="text-sm hover:text-gray-400">Contact Us</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>