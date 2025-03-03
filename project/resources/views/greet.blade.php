<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-200 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <span class="text-xl font-semibold text-gray-800">Laravel App</span>
                <div class="space-x-6">
                    <a href="/" class="text-gray-600 hover:text-gray-900 transition-colors">Home</a>
                    <a href="/greet" class="text-blue-600 font-medium">Greet</a>
                    <a href="/tasks" class="text-gray-600 hover:text-gray-900 transition-colors">Tasks</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-12 max-w-4xl">
        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
            <h1 class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-6 pb-4">
                Hello {{ $name ?? 'JohnRonald' }}!
            </h1>
            <p class="text-xl text-gray-600 leading-relaxed mb-8">
                Welcome to greetings page!
            </p>
            <div class="flex space-x-4">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition-colors duration-200">
                    Get Started
                </button>
                <button class="border border-gray-300 hover:border-gray-400 px-6 py-2 rounded-lg transition-colors duration-200">
                    Learn More
                </button>
            </div>
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
