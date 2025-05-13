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
    <title>English Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-green-600 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">English Games</h1>
            <a href="index.html" class="bg-white text-green-600 px-4 py-2 rounded-lg hover:bg-green-100 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to Home
            </a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- English Game 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-spell-check text-green-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Spelling Bee</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Test your spelling skills with challenging words!</p>
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- English Game 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-book-open text-green-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Grammar Quest</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Master grammar rules through interactive challenges!</p>
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- English Game 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-comment-dots text-green-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Vocabulary Builder</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Expand your vocabulary with fun word games!</p>
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
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
