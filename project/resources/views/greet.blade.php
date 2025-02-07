<!DOCTYPE html>
<html>
<head>
    <title>Greeting</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">
            Hello {{ $name ?? 'JohnRonald' }}!
        </h1>
        <p>Welcome to greetings page!.</p>
    </div>
</body>
</html>
