<?php require "../resources/views/components/header.php";?>
<body class="bg-gradient-to-b from-blue-50 to-indigo-100 min-h-screen flex flex-col">
<!-- Navbar -->
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/"><h1 class="text-2xl font-bold text-indigo-600">Quiz App</h1></a>
            </div>
            <div class="flex items-center space-x-4">
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/about" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="#features" class="text-gray-600 hover:text-gray-900">Features</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-gray-900">How It Works</a>
                    <a href="/login" class="text-gray-600 hover:text-gray-900">Login</a>
                    <a href="/register"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Register
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button">
                        <i class="fas fa-bars text-gray-500 text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden mobile-menu md:hidden pl-3">
        <a href="#features" class="block my-2 text-xl text-gray-600 hover:text-gray-900">Features</a>
        <a href="#how-it-works" class="block my-2 text-xl text-gray-600 hover:text-gray-900">How It Works</a>
        <a href="/login" class="block my-2 text-xl text-gray-600 hover:text-gray-900">Login</a>
        <a href="/create-quiz"
           class="block my-2 text-xl inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            Register
        </a>
    </div>
</nav>

<!-- Hero Section -->
<header class="flex-grow flex items-center justify-center bg-gradient-to-b from-white via-indigo-50 to-indigo-100 py-32">
    <div class="text-center">
        <h1 class="text-5xl font-extrabold text-gray-800 sm:text-6xl">
            <span>Build and Share</span>
            <span class="block text-indigo-600">Interactive Quizzes</span>
        </h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Engage your audience with fun quizzes, share knowledge, and track progress.
            Perfect for educators, trainers, and curious learners.
        </p>
        <div class="mt-8 space-y-3 sm:space-y-0 sm:flex sm:justify-center sm:space-x-4">
            <a href="/create-quiz"
               class="inline-block px-6 py-3 text-lg font-medium text-white bg-indigo-600 rounded-lg shadow-lg hover:bg-indigo-700">
                Create Your Quiz
            </a>
            <a href="#how-it-works"
               class="inline-block px-6 py-3 text-lg font-medium text-indigo-600 bg-white border border-indigo-600 rounded-lg shadow-lg hover:bg-gray-50">
                Learn More
            </a>
        </div>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Amazing Features</h2>
        <p class="mt-4 text-lg text-gray-600">Discover the benefits of using our platform to create and share quizzes
            effortlessly.</p>
        <div class="mt-10 grid gap-8 md:grid-cols-3">
            <div class="p-6 bg-indigo-50 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-bold text-indigo-700">Easy to Use</h3>
                <p class="mt-2 text-gray-600">Build quizzes in minutes with our simple interface.</p>
            </div>
            <div class="p-6 bg-indigo-50 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-bold text-indigo-700">Track Progress</h3>
                <p class="mt-2 text-gray-600">Analyze results to understand your learners better.</p>
            </div>
            <div class="p-6 bg-indigo-50 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-bold text-indigo-700">Customizable</h3>
                <p class="mt-2 text-gray-600">Personalize quizzes to suit your audience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php require "../resources/views/components/footer.php";?>
