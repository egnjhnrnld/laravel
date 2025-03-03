<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <span class="text-xl font-semibold text-gray-800">Laravel App</span>
                <div class="space-x-6">
                    <a href="/" class="text-gray-600 hover:text-gray-900 transition-colors">Home</a>
                    <a href="/greet" class="text-gray-600 hover:text-gray-900 transition-colors">Greet</a>
                    <a href="/tasks" class="text-blue-600 font-medium">Tasks</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-12">
        <div class="bg-white rounded-xl shadow-lg p-8 max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-6">
                Task Manager
            </h1>
            
            <!-- Task content will go here -->
            <p class="text-gray-600 mb-6">Your tasks will appear here.</p>
            
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-auto">
        <div class="container mx-auto px-4 py-6">
            <p class="text-center text-gray-600 text-sm">
                &copy; {{ date('Y') }} Laravel App. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>
