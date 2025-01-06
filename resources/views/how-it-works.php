<?php require "../resources/views/components/header.php";?>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col">
    <?php require "../resources/views/components/navbar2.php";?>
    <!-- Header -->
    <header class="bg-white shadow-sm p-6">
        <h1 class="text-3xl font-bold text-center text-gray-800">How It Works</h1>
    </header>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <div class="max-w-4xl mx-auto">
            <!-- Step 1 -->
            <div class="bg-white p-6 rounded-lg shadow mb-8 flex items-start">
                <div class="text-blue-500 text-4xl mr-6">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold mb-2">Step 1: Sign Up</h2>
                    <p class="text-gray-600">Create your account by signing up with your email and a secure password. It's quick and easy.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-6 rounded-lg shadow mb-8 flex items-start">
                <div class="text-green-500 text-4xl mr-6">
                    <i class="fas fa-book-open"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold mb-2">Step 2: Create a Quiz</h2>
                    <p class="text-gray-600">Design your quizzes with various question types to challenge and engage users.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-6 rounded-lg shadow mb-8 flex items-start">
                <div class="text-yellow-500 text-4xl mr-6">
                    <i class="fas fa-share-alt"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold mb-2">Step 3: Share</h2>
                    <p class="text-gray-600">Share your quizzes with friends or the community to get their responses and feedback.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-white p-6 rounded-lg shadow mb-8 flex items-start">
                <div class="text-purple-500 text-4xl mr-6">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold mb-2">Step 4: Analyze Results</h2>
                    <p class="text-gray-600">Review the results and performance statistics to see how well your quizzes are doing.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-sm p-6 text-center">
        <p class="text-gray-600">&copy; 2025 Quiz App. All rights reserved.</p>
    </footer>
</div>
</body>
</html>
