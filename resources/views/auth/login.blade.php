<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-200 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full p-6 bg-gray-800 rounded-lg shadow-lg transition-transform transform hover:-translate-y-1">
        <h1 class="text-3xl font-bold text-center mb-6">Login</h1>

        @if ($errors->any())
            <div class="bg-red-600 text-white p-4 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email" class="border border-gray-600 bg-gray-700 text-gray-200 rounded p-2 w-full focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-lg font-semibold mb-2">Password</label>
                <input type="password" name="password" id="password" class="border border-gray-600 bg-gray-700 text-gray-200 rounded p-2 w-full focus:outline-none focus:ring focus:ring-blue-500" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded w-full hover:bg-blue-700 transition duration-300">Login</button>
        </form>
        <div class="mt-4 text-center">
            <a href="#" class="text-sm text-blue-400 hover:underline">Forgot Password?</a>
        </div>
    </div>
</body>
</html>