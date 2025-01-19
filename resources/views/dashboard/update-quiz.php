<?php require "../resources/views/components/dashboard/header.php"; ?>

<body class="bg-gray-100">
<div class="flex min-h-screen">
    <div class="flex-1">
        <header class="bg-white shadow-md">
            <div class="h-16 flex items-center justify-between px-4">
                <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <img src="https://i.pinimg.com/736x/63/ed/ad/63edad1b2809a6f13048bc166f8e6f7e.jpg" alt="Profile" class="w-10 h-10 rounded-full">
                        <span class="text-gray-700 font-medium" id="userName"></span>
                    </div>
                </div>
            </div>
        </header>
        <main class="p-6">
            <div class="container mx-auto">
                <!-- Header -->
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Update Quiz</h2>
                    <p class="mt-2 text-gray-600">Edit the details below to update the quiz</p>
                </div>

                <!-- Main Form -->
                <form class="space-y-6" id="quizForm" method="POST" onsubmit="store(event)">
                    <!-- Quiz Details Section -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Quiz Details</h3>
                        <div class="space-y-4">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Quiz Title</label>
                                <input type="text" id="title" name="title" value="<?= /** @var TYPE_NAME $quiz */
                                $quiz->title ?>" placeholder="Quiz Title" required
                                       class="w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea id="description" name="description" rows="3" placeholder="Description" required
                                          class="w-full px-4 py-2 border rounded-lg mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"><?= $quiz->description ?></textarea>
                            </div>
                            <div>
                                <label for="timeLimit" class="block text-sm font-medium text-gray-700">Time Limit (minutes)</label>
                                <input type="number" id="timeLimit" name="timeLimit" value="<?= $quiz->timeLimit ?>" placeholder="Time Limit" min="1" required
                                       class="px-4 py-2 border rounded-lg mt-1 block w-48 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Questions Section - Removed add question button -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-gray-800">Questions</h2>
                        </div>

                        <div id="questionsContainer" class="space-y-6">
                            <!-- Existing questions will be dynamically loaded here -->
                        </div>
                        <div id="error"></div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                                class="px-6 py-3 bg-green-600 text-white font-medium rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Update Quiz
                        </button>
                    </div>
                </form>
            </div>
    </div>
    </main>
</div>
<script src="./js/add-quiz.js"></script>
<script>
    async function store(event) {
        event.preventDefault();
        let form = document.getElementById("quizForm"),
            formData = new FormData(form);
        const { default: apiFetch } = await import("/js/utils/apiFetch.js");

        document.getElementById("error").innerHTML = "";

        await apiFetch(`/quizzes/${<?php /** @var TYPE_NAME $id */
        echo $id; ?>}`, { method: 'PUT', body: formData })
            .then(() => {
                window.location.href = '/my-quizzes';
            })
            .catch(error => {
                document.getElementById('error').innerHTML = '';
                if (error.data && error.data.errors) {
                    Object.keys(error.data.errors).forEach(err => {
                        document.getElementById("error").innerHTML += `<p class='text-red-600 mt-1'>${error.data.errors[err]}</p>`;
                    });
                } else {
                    document.getElementById("error").innerHTML += `<p class='text-red-600 mt-1'>An error occurred. Please try again.</p>`;
                }
            });
    }
</script>
</body>
</html>
