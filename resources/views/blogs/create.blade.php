<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create Blog</title>
</head>
<body class="bg-gray-100">
    <header class="bg-gradient-to-r from-blue-600 to-blue-400 text-white p-6 shadow-md">
        <h1 class="text-4xl font-bold">Create New Blog</h1>
    </header>
    
    <main class="max-w-5xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-6">
        <form action="{{ route('blogs.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="summary" class="block text-gray-700">Summary</label>
                <input type="text" name="summary" id="summary" class="border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content</label>
                <textarea name="content" id="content" rows="5" class="border rounded w-full py-2 px-3" required></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create Blog</button>
        </form>
    </main>
    
    <footer class="bg-blue-600 text-white text-center p-4 mt-6">
        <p>&copy; 2023 My Website. All Rights Reserved.</p>
    </footer>
</body>
</html>