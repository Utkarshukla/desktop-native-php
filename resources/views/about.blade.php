<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white p-4">
        <nav class="container mx-auto flex justify-between">
            <a href="/" class="text-2xl font-bold">MyWebsite</a>
            <div>
                <a href="/" class="mx-4">Home</a>
                <a href="/about" class="mx-4">About</a>
                <a href="/contact" class="mx-4">Contact</a>
                <a href="/shop" class="mx-4">Shop</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto py-16">
        <h1 class="text-4xl font-bold text-center mb-8">About Us</h1>
        <p class="text-lg text-center">We are a company that values quality and customer satisfaction. Our mission is to provide the best products and services to our customers.</p>
    </main>

    <footer class="bg-blue-600 text-white text-center py-4">
        &copy; 2025 MyWebsite. All rights reserved.
    </footer>
</body>
</html>
