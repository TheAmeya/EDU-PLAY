<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: login1.php");
    exit();
}
?>
<!-- INDEX.HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Games Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-blue-600 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl font-bold">Educational Games Hub</h1>
            <p class="mt-2">Fun learning for students of all ages</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Math Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-square-root-alt text-blue-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Mathematics</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Improve your math skills with fun games!</p>
                    <a href="math-games.html" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-block transition">
                        Explore Math Games <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- English Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-book text-green-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">English</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Enhance your language skills!</p>
                    <a href="english-games.html" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg inline-block transition">
                        Explore English Games <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Science Card -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-flask text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Science</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Discover physics and chemistry!</p>
                    <a href="science.html" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg inline-block transition">
                        Explore Science <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="parents.html" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg inline-block transition">
                <i class="fas fa-user-shield mr-2"></i> Parents Dashboard
            </a>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Educational Games Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<!-- MATH-GAMES.HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-blue-600 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Mathematics Games</h1>
            <a href="index.html" class="bg-white text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-100 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to Home
            </a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Math Game 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-calculator text-blue-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Quick Math Challenge</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Test your arithmetic skills with timed challenges!</p>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Math Game 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-shapes text-blue-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Geometry Puzzle</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Solve shape-based puzzles and improve spatial reasoning!</p>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Math Game 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Algebra Adventure</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Solve equations to progress through exciting levels!</p>
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg w-full transition">
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

<!-- ENGLISH-GAMES.HTML -->
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

<!-- SCIENCE.HTML -->
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
            <a href="physics-games.html" class="subject-card bg-white rounded-lg shadow-md overflow-hidden">
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
            <a href="chemistry-games.html" class="subject-card bg-white rounded-lg shadow-md overflow-hidden">
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
            <p>&copy; 2023 Educational Games Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<!-- PHYSICS-GAMES.HTML -->
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

<!-- CHEMISTRY-GAMES.HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry Games</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-purple-600 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Chemistry Games</h1>
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
            <!-- Chemistry Game 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-flask text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Element Explorer</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Discover the periodic table through interactive challenges!</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Chemistry Game 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-vial text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Reaction Lab</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Mix chemicals and observe reactions in a safe virtual lab!</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg w-full transition">
                        Play Now <i class="fas fa-play ml-2"></i>
                    </button>
                </div>
            </div>

            <!-- Chemistry Game 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 p-3 rounded-full mr-4">
                            <i class="fas fa-dna text-purple-600 text-2xl"></i>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-800">Molecular Builder</h2>
                    </div>
                    <p class="text-gray-600 mb-4">Construct molecules and learn about chemical bonds!</p>
                    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg w-full transition">
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

<!-- PARENTS.HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parents Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-yellow-600 text-white py-6 shadow-lg">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Parents Dashboard</h1>
            <a href="index.html" class="bg-white text-yellow-600 px-4 py-2 rounded-lg hover:bg-yellow-100 transition">
                <i class="fas fa-arrow-left mr-2"></i> Back to Home
            </a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Student Progress Report</h2>
                
                <!-- Student Selector -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="student-select">
                        Select Student
                    </label>
                    <select id="student-select" class="block w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <option>John Doe</option>
                        <option>Jane Smith</option>
                        <option>Michael Johnson</option>
                    </select>
                </div>

                <!-- Progress Summary -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-blue-800 mb-2">Mathematics</h3>
                        <div class="flex items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                            <span class="text-blue-600 font-bold">85%</span>
                        </div>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-green-800 mb-2">English</h3>
                        <div class="flex items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 72%"></div>
                            </div>
                            <span class="text-green-600 font-bold">72%</span>
                        </div>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-purple-800 mb-2">Science</h3>
                        <div class="flex items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                <div class="bg-purple-600 h-2.5 rounded-full" style="width: 68%"></div>
                            </div>
                            <span class="text-purple-600 font-bold">68%</span>
                        </div>
                    </div>
                </div>

                <!-- Detailed Scores Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="py-3 px-4 text-left">Subject</th>
                                <th class="py-3 px-4 text-left">Game</th>
                                <th class="py-3 px-4 text-left">Last Played</th>
                                <th class="py-3 px-4 text-left">Score</th>
                                <th class="py-3 px-4 text-left">Progress</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="py-3 px-4">Mathematics</td>
                                <td class="py-3 px-4">Quick Math Challenge</td>
                                <td class="py-3 px-4">2023-11-15</td>
                                <td class="py-3 px-4">92/100</td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 92%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Mathematics</td>
                                <td class="py-3 px-4">Geometry Puzzle</td>
                                <td class="py-3 px-4">2023-11-12</td>
                                <td class="py-3 px-4">85/100</td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">English</td>
                                <td class="py-3 px-4">Spelling Bee</td>
                                <td class="py-3 px-4">2023-11-10</td>
                                <td class="py-3 px-4">78/100</td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 78%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Science</td>
                                <td class="py-3 px-4">Element Explorer</td>
                                <td class="py-3 px-4">2023-11-08</td>
                                <td class="py-3 px-4">65/100</td>
                                <td class="py-3 px-4">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                                        <div class="bg-purple-600 h-2.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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