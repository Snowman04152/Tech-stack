<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>User Profile</title>
</head>
<body class="bg-gray-900 text-gray-200">
    <header class="bg-gray-800 text-white p-6 shadow-md">
        <h1 class="text-4xl font-bold text-center">User  Profile</h1>
    </header>
    
    <div class="flex max-w-5xl mx-auto mt-6">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-gray-800 rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Navigation</h2>
            <ul>
                <li><a href="{{ route('profile') }}" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Profile Overview</a></li>
                <li><a href="{{ route('edit.profile') }}" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Edit Profile</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="block py-2 px-4 rounded hover:bg-gray-700 transition duration-300">Logout</button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Profile Content -->
        <main class="flex-1 ml-6 p-6 bg-gray-800 rounded-lg shadow-lg">
            <div class="flex items-center mb-6">
                <img src="https://via.placeholder.com/100" alt="Profile Picture" class="rounded-full border-4 border-green-600 shadow-lg">
                <div class="ml-4">
                    <h2 class="text-3xl font-semibold">Fitchiss</h2>
                    <p class="text-gray-400">fithcisbox@gmail.com</p>
                </div>
            </div>

            <div class="bg-gray-700 p-4 rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">About Me</h3>
                <p class="text-gray-300 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet accumsan arcu. Cras tincidunt, velit ut fringilla malesuada, libero elit bibendum libero, a tristique sem metus eu nisi.</p>
            </div>

            <div class="flex justify-between mt-6">
                <a href="{{ route('edit.profile') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition duration-300 text-lg font-semibold">Edit Profile</a>
                
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 transition duration-300 text-lg font-semibold">Logout</button>
                </form>
            </div>
        </main>
    </div>

    <footer class="bg-gray-800 text-white text-center p-4 mt-6">
        <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </footer>
</body>
</html>