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

            <?php
            $games = [
                ["Quick Math Challenge", "Test your arithmetic skills with timed challenges!", "fas fa-calculator", "mproject3.php"],
                ["Geometry Puzzle", "Solve shape-based puzzles and improve spatial reasoning!", "fas fa-shapes", "mproject4.php"],
                ["Algebra Adventure", "Solve equations to progress through exciting levels!", "fas fa-chart-line", "mproject5.php"],
                ["Number Ninja", "Slash through numbers to reach the right solution!", "fas fa-crosshairs", "mproject6.php"],
                ["Math Maze", "Navigate the maze by solving math problems!", "fas fa-route", "mproject7.php"],
                ["Fraction Frenzy", "Master fractions in this fast-paced game!", "fas fa-divide", "mproject8.php"],
            ];

            foreach ($games as $game) {
                echo '
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="' . $game[2] . ' text-blue-600 text-2xl"></i>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-800">' . $game[0] . '</h2>
                        </div>
                        <p class="text-gray-600 mb-4">' . $game[1] . '</p>
                        <a href="' . $game[3] . '" class="block text-center bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                            Play Now <i class="fas fa-play ml-2"></i>
                        </a>
                    </div>
                </div>';
            }
            ?>

        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 Educational Games Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
