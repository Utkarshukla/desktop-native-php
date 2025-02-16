<!-- resources/views/shop.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
        <h1 class="text-4xl font-bold text-center mb-8">Shop Our Products</h1>
        <p class="text-lg text-center">Browse through our collection of amazing products!</p>
        <div class="grid grid-cols-3 gap-8 mt-8">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold text-xl">Product 1</h3>
                <p class="text-lg">$29.99</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold text-xl">Product 2</h3>
                <p class="text-lg">$49.99</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold text-xl">Product 3</h3>
                <p class="text-lg">$69.99</p>
            </div>
        </div>
    </main>

    <footer class="bg-blue-600 text-white text-center py-4">
        &copy; 2025 MyWebsite. All rights reserved.
    </footer>
</body>
</html>
