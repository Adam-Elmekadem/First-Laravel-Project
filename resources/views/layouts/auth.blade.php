<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Authentication') - Laravel Portfolio</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @stack('styles')
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="text-3xl font-bold text-cyan-400 mb-2">
                <i class="fas fa-rocket mr-2"></i>ELMK.
            </div>
            <p class="text-gray-400">@yield('subtitle', 'Authentication')</p>
        </div>

        <div class="bg-gray-800/90 backdrop-blur-md rounded-2xl shadow-2xl border border-gray-700/50 p-8">
            @yield('content')
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm transition-colors inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Home
            </a>
        </div>

        <div class="text-center mt-8">
            <p class="text-gray-500 text-sm">
                &copy; {{ date('Y') }} Adam El Mekadem
            </p>
        </div>
    </div>

    @vite('resources/js/app.js')
    @stack('scripts')
    
    <style>
        .form-focus:focus {
            transform: scale(1.02);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
</body>
</html>
