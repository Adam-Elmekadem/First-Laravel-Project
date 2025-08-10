<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Laravel Portfolio</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="mt-3 text-3xl font-bold text-cyan-400 mb-2">
                ELMK.
            </div>
            <p class="text-gray-400">Sign in to your account</p>
        </div>

        <div class="bg-gray-800/90 backdrop-blur-md rounded-2xl shadow-2xl border border-gray-700/50 p-8">
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
                    Welcome Back
                </h1>
                <p class="text-gray-400 mt-2">Please enter your credentials</p>
            </div>

            <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
                @csrf

                @if($errors->any())
                    <div class="bg-red-500/20 text-red-500 p-4 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-gray-300 flex items-center">
                        <i class="fas fa-envelope mr-2 text-cyan-400"></i>
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all duration-300"
                        placeholder="Enter your email"
                    >
                </div>

                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-gray-300 flex items-center">
                        <i class="fas fa-lock mr-2 text-purple-400"></i>
                        Password
                    </label>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300"
                            placeholder="Enter your password"
                        >
                        <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-cyan-500 bg-gray-700 border-gray-600 rounded focus:ring-cyan-500 focus:ring-2">
                        <span class="ml-2 text-sm text-gray-400">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-cyan-400 hover:text-cyan-300 transition-colors">
                        Forgot password?
                    </a>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-cyan-500 to-purple-600 hover:from-cyan-600 hover:to-purple-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-500/25 flex items-center justify-center"
                >
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Sign In
                </button>
            </form>

            <div class="mt-6 text-center border-t border-gray-700 pt-6">
                <p class="text-gray-400 text-sm">
                    Don't have an account? 
                    <a href="#" class="text-cyan-400 hover:text-cyan-300 font-medium transition-colors">
                        Sign up here
                    </a>
                </p>
                <div class="mt-4">
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors flex items-center justify-center">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Home
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-8 mb-3">
            <p class="text-gray-500 text-sm">
                &copy; 2025 Adam El Mekadem
            </p>
        </div>
    </div>

    @vite('resources/js/app.js')
    
    <style>
        .form-focus:focus {
            transform: scale(1.02);
        }
    </style>
</body>
</html>