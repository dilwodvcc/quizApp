<?php require "../resources/views/components/header.php";?>
<body class="bg-gradient-to-b from-gray-900 to-black min-h-screen flex items-center justify-center text-white">

<div class="max-w-md w-full space-y-8 bg-gray-800 p-8 rounded-xl shadow-2xl transform transition duration-300 hover:scale-105">
    <!-- Logo Section -->
    <div class="text-center mb-6">
        <h2 class="text-4xl font-extrabold text-indigo-500 tracking-wide drop-shadow-md">Login to Your Account</h2>
    </div>

    <!-- Form Section -->
    <form id="form" class="mt-8 space-y-6" action="/api/login" method="POST">
        <div class="rounded-md shadow-sm -space-y-px">
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="sr-only">Email Address</label>
                <input id="email" name="email" type="email" required
                       class="appearance-none rounded-md relative block w-full px-4 py-3 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm"
                       placeholder="Email Address">
            </div>
            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" required
                       class="appearance-none rounded-md relative block w-full px-4 py-3 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm"
                       placeholder="Password">
            </div>
            <div style="display: block" id="error"></div>
        </div>

        <!-- Remember me & Forgot Password -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox"
                       class="h-5 w-5 text-indigo-500 focus:ring-indigo-500 border-gray-400 rounded">
                <label for="remember-me" class="ml-2 block text-sm text-gray-300">
                    Remember me
                </label>
            </div>
            <div class="text-sm">
                <a href="#" class="font-medium text-indigo-400 hover:text-indigo-300">
                    Forgot your password?
                </a>
            </div>
        </div>

        <!-- Submit Button -->

        <div>
            <button type="button" onclick="login()"
                    class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-700 hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-indigo-600">
                Login
            </button>
        </div>

        <!-- Register Section -->
        <div class="text-center text-sm text-gray-400">
            Don't have an account?
            <a href="/register" class="text-indigo-400 font-medium hover:text-indigo-300">
                Create an Account
            </a>
        </div>
    </form>
</div>
</body>
<script src="./js/login.js"></script>
</html>
