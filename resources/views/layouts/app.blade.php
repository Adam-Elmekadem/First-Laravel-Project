<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Portfolio')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @stack('styles')
</head>
<body class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900">
    
    <!-- Navigation Header -->
    @include('partials.header')
    
    <!-- Flash Messages -->
    @include('partials.flash-messages')
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('partials.footer')
    
    @vite('resources/js/app.js')
    @stack('scripts')
    
    <!-- Animation Styles -->
    <style>
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 1s ease forwards;
        }
        
        .animation-delay-200 {
            animation-delay: 0.2s;
            opacity: 0;
        }
        
        .animation-delay-400 {
            animation-delay: 0.4s;
            opacity: 0;
        }
    </style>
</body>
</html>
