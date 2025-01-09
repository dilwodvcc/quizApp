<?php require "../resources/views/components/header.php";?>
<body class="bg-gradient-to-b from-gray-900 to-black min-h-screen flex items-center justify-center text-white">

<div class="max-w-md w-full space-y-8 bg-gray-800 p-8 rounded-xl shadow-2xl transform transition duration-300 hover:scale-105">
    <h2 class="text-center text-4xl font-extrabold text-indigo-500 tracking-wide drop-shadow-md">Create your
        account</h2>
    <p class="mt-2 text-center text-sm text-gray-400">
        Already have an account?
        <a href="/login" class="text-indigo-400 hover:text-indigo-300 font-medium">
            Sign in
        </a>
    </p>
    <form id="form" class="mt-8 space-y-6" action="/api/register" method="POST">
        <!-- Full Name Input -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300">Full name</label>
            <input id="name" name="full_name" type="text" required
                   class="appearance-none rounded-md relative block w-full px-4 py-3 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm"
                   placeholder="Enter your full name">
        </div>

        <!-- Email Input -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300">Email address</label>
            <input id="email" name="email" type="email" required
                   class="appearance-none rounded-md relative block w-full px-4 py-3 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm"
                   placeholder="Enter your email address">
        </div>

        <!-- Password Input -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
            <input id="password" name="password" type="password" required
                   class="appearance-none rounded-md relative block w-full px-4 py-3 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm"
                   placeholder="Password created">
        </div>

        <!-- Confirm Password Input -->
        <div>
            <label for="confirm-password" class="block text-sm font-medium text-gray-300">Confirm password</label>
            <input id="confirm-password" name="confirm_password" type="password" required
                   class="appearance-none rounded-md relative block w-full px-4 py-3 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm"
                   placeholder="Confirm password created">
            <p id="error"></p>
        </div>

        <!-- Terms and Conditions -->
        <div class="flex items-center">
            <input id="terms" name="terms" type="checkbox" required
                   class="h-5 w-5 text-indigo-500 focus:ring-indigo-500 border-gray-400 rounded">
            <label for="terms" class="ml-2 block text-sm text-gray-300">
                I agree to the
                <a href="#" class="text-indigo-400 hover:text-indigo-300">Terms and Conditions</a>
            </label>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="button" onclick="register()"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-white bg-indigo-700 hover:bg-indigo-800 focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-indigo-600">
                Create Account
            </button>
        </div>
    </form>
</div>
</body>
<script src="./js/register.js"></script>
</html>
