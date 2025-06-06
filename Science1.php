<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Science Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-purple-600 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Science Games</h1>
            <a href="index.html" class="bg-white text-purple-600 px-4 py-2 rounded-lg hover:bg-purple-100 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to Home
            </a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-2xl mx-auto">
            <!-- Physics Card -->
            <a href="physics1.php" class="subject-card bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-atom text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Physics</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Explore the laws of motion and energy through interactive games</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition">
                        Explore Physics <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </a>

            <!-- Chemistry Card -->
            <a href="chemistry1.php" class="subject-card bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-flask text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Chemistry</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Discover chemical reactions and elements through fun experiments</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition">
                        Explore Chemistry <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </a>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Educational Games Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
