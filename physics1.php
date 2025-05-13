<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login1.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physics Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-purple-600 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Physics Games</h1>
            <div>
                <a href="science.html" class="bg-white text-purple-600 px-4 py-2 rounded-lg hover:bg-purple-100 transition mr-2">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Science
                </a>
                <a href="index.html" class="bg-white text-purple-600 px-4 py-2 rounded-lg hover:bg-purple-100 transition">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Physics Game 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-atom text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Newton's Challenge</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Test your understanding of Newton's laws of motion!</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Physics Game 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-bolt text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Electricity Explorer</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Build circuits and learn about electricity!</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Physics Game 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-sun text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Solar System Simulator</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Explore planetary motion and gravity!</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button a href="chemistry1.php">
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Educational Games Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
