<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $blog->title }}</title>
</head>
<body class="bg-gray-900 text-gray-200">
    <header class="bg-gradient-to-r from-gray-800 to-gray-700 text-white p-6 shadow-md flex justify-between items-center">
        <div>
            <h1 class="text-4xl font-bold">{{ $blog->title }}</h1>
        </div>
    </header>
    
    <main class="max-w-5xl mx-auto p-6 bg-gray-800 rounded-lg shadow-lg mt-6">
        <h2 class="text-3xl font-semibold mb-4 text-center">{{ $blog->title}}</h2>
        <img src="{{ Storage::url('/' . $blog->image_path) }}" alt="Image">

        <p class="text-gray-300 leading-relaxed mb-6 text-center">{{ $blog->description }}</p>
    </main>
    
    <footer class="bg-gray-800 text-white text-center p-4 mt-6">
        <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </footer>
</body>
</html>