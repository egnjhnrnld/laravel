<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                <span class="text-xl font-semibold text-gray-800">Laravel App</span>
                <div class="space-x-6">
                    <a href="/" class="text-blue-600 font-medium">Home</a>
                    <a href="/greet" class="text-gray-600 hover:text-gray-900 transition-colors">Greet</a>
                    <a href="/tasks" class="text-gray-600 hover:text-gray-900 transition-colors">Tasks</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="py-20 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-5xl md:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-6">
                Welcome to Laravel
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Your central hub for exploring Laravel features and applications.
            </p>
            <div class="flex justify-center gap-4">
                <a href="/greet" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg transition-colors duration-200">
                    Get Started
                </a>
                <a href="https://laravel.com/docs" target="_blank" class="border border-gray-300 hover:border-gray-400 px-8 py-3 rounded-lg transition-colors duration-200">
                    Documentation
                </a>
            </div>
        </div>
    </header>

    <!-- Features Grid -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Available Features</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Greet Feature -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                    <div class="text-blue-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Greetings</h3>
                    <p class="text-gray-600 mb-4">Experience personalized greetings with our dynamic greeting system.</p>
                    <a href="/greet" class="text-blue-600 hover:text-blue-700 font-medium">Try it out →</a>
                </div>

                <!-- Tasks Feature -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                    <div class="text-blue-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Task Manager</h3>
                    <p class="text-gray-600 mb-4">Organize and track your tasks with our task management system.</p>
                    <a href="/tasks" class="text-blue-600 hover:text-blue-700 font-medium">Manage Tasks →</a>
                </div>

                <!-- Documentation -->
                <div class="bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                    <div class="text-blue-600 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Documentation</h3>
                    <p class="text-gray-600 mb-4">Learn more about Laravel and its powerful features.</p>
                    <a href="https://laravel.com/docs" target="_blank" class="text-blue-600 hover:text-blue-700 font-medium">Read Docs →</a>
                </div>
            </div>
        </div>
    </section>

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
