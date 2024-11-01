<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-200 flex flex-col min-h-screen">
    <header class="bg-gradient-to-r from-gray-800 to-gray-700 text-white p-6 shadow-lg flex justify-between items-center">
        <div>
            <h1 class="text-4xl font-extrabold">Blogs Website</h1>
            <p class="text-lg">Discover a wealth of knowledge through our diverse range of blog posts</p>
        </div>
        @auth
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user"></i> 
            </button>
            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="{{ route('profile') }}">View Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
        @else
        <a class="btn btn-primary" type="button" id="profileDropdown" href="{{ route('login') }}"  aria-expanded="false">
            Login
        </a>
        @endauth

    </header>
    
    <main class="flex-grow max-w-5xl mx-auto p-6 bg-gray-800 rounded-lg shadow-lg mt-6">
        <h2 class="text-4xl font-semibold mb-4 text-center">Latest Blogs</h2>
        <p class="text-gray-400 leading-relaxed mb-6 text-center">Check out our latest blog posts below!</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <h3 class="text-2xl font-semibold mb-2">Blog Post One</h3>
                <p class="text-gray-300 mb-4">A brief summary of the first blog post. Learn more about this topic!</p>
                <a href="{{ route('blogs.show', ['blog' => 1]) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Read More</a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <h3 class="text-2xl font-semibold mb-2">Blog Post Two</h3>
                <p class="text-gray-300 mb-4">A brief summary of the second blog post. Explore the insights shared!</p>
                <a href="{{ route('blogs.show', ['blog' => 2]) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Read More</a>
            </div>
            <div class="bg-gray-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 transform hover:scale-105">
                <h3 class="text-2xl font-semibold mb-2">Blog Post Three</h3>
                <p class="text-gray-300 mb-4">A brief summary of the third blog post. Dive into the details!</p>
                <a href="{{ route('blogs.show', ['blog' => 3]) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Read More</a>
            </div>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('blogs.index') }}" class="inline-block bg -blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition duration-300">View All Blogs</a>
        </div>

    </main>
    
    <footer class="bg-gray-800 text-white text-center p-4 mt-6">
        <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </footer>

</body>
</html>