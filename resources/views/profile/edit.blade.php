<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Edit Profile</title>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-6 shadow-md">
        <h1 class="text-3xl font-bold text-center">Edit Profile</h1>
    </header>
    <main class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-6">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update.profile') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-lg font-semibold mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="border border-gray-300 rounded p-2 w-full">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="border border-gray-300 rounded p-2 w-full">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-between mt-6">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Update Profile</button>
                <a href="{{ route('profile') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300">Cancel</a>
            </div>
        </form>


        <div class="mt-6">
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300">Logout</button>
            </form>
        </div>
    </main>
    <footer class="bg-blue-600 text-white text-center p-4 mt-6">
        <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </footer>
</body>
</html>