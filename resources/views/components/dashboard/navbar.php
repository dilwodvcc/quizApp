

<aside class="bg-white w-64 min-h-screen flex flex-col shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in fixed md:static z-30" id="sidebar">
    <div class="p-4 border-b flex items-center justify-between">
        <a href="/"><h2 class="text-2xl font-bold text-gray-800">Quiz App</h2></a>
        <div>
            <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                <i class="fas fa-close text-xl"></i>
            </button>
        </div>
    </div>
    <nav class="flex-grow p-4">
        <a href="/dashboard" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
            <i class="fas fa-home mr-2"></i> Dashboard
        </a>
        <a href="/my-quizzes" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
            <i class="fas fa-book mr-2"></i> My Quizzes
        </a>
        <a href="/create-quiz" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
            <i class="fas fa-plus mr-2"></i> Create Quiz
        </a>
        <a href="/statistics" class="block p-3 mb-2 text-gray-600 hover:bg-gray-100 rounded-lg">
            <i class="fas fa-chart-bar mr-2"></i> Statistics
        </a>
    </nav>
</aside>
<!-- Main Content -->
<div class="flex-1">
    <!-- Top Navigation -->
    <header class="bg-white shadow-sm">
        <div class="h-16 flex items-center justify-between px-4">
            <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="flex items-center space-x-4">

                <div class="flex items-center space-x-2">
                    <img src="https://i.pinimg.com/736x/63/ed/ad/63edad1b2809a6f13048bc166f8e6f7e.jpg" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="text-gray-700 font-medium">John Doe</span>
                </div>
            </div>
        </div>
    </header>