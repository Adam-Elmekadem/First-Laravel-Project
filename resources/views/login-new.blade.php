@extends('layouts.auth')

@section('title', 'Login')
@section('subtitle', 'Sign in to your account')

@section('content')
    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
            Welcome Back
        </h1>
        <p class="text-gray-400 mt-2">Please enter your credentials</p>
    </div>

    <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Display All Errors -->
        @if($errors->any())
            <div class="bg-red-500/20 border border-red-400/50 text-red-300 p-4 rounded-lg animate-fade-in">
                <div class="flex items-center mb-2">
                    <i class="fas fa-exclamation-triangle mr-2 text-red-400"></i>
                    <span class="font-semibold">Please fix the following errors:</span>
                </div>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Email Field -->
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
                value="{{ old('email') }}"
                class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-all duration-300 @error('email') border-red-400 ring-red-400/50 @enderror"
                placeholder="Enter your email"
            >
            @error('email')
                <div class="text-red-400 text-sm flex items-center animate-fade-in">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password Field -->
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
                    class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-300 @error('password') border-red-400 ring-red-400/50 @enderror"
                    placeholder="Enter your password"
                >
                <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white transition-colors">
                    <i id="password-icon" class="fas fa-eye"></i>
                </button>
            </div>
            @error('password')
                <div class="text-red-400 text-sm flex items-center animate-fade-in">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="w-4 h-4 text-cyan-500 bg-gray-700 border-gray-600 rounded focus:ring-cyan-500 focus:ring-2">
                <span class="ml-2 text-sm text-gray-400">Remember me</span>
            </label>
            <a href="#" class="text-sm text-cyan-400 hover:text-cyan-300 transition-colors">
                Forgot password?
            </a>
        </div>

        <!-- Submit Button -->
        <button 
            type="submit" 
            class="w-full bg-gradient-to-r from-cyan-500 to-purple-600 hover:from-cyan-600 hover:to-purple-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-500/25 flex items-center justify-center"
        >
            <i class="fas fa-sign-in-alt mr-2"></i>
            Sign In
        </button>
    </form>

    <!-- Footer Links -->
    <div class="mt-6 text-center border-t border-gray-700 pt-6">
        <p class="text-gray-400 text-sm">
            Don't have an account? 
            <a href="{{ route('register') }}" class="text-cyan-400 hover:text-cyan-300 font-medium transition-colors">
                Sign up here
            </a>
        </p>
    </div>
@endsection

@push('scripts')
<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const passwordIcon = document.getElementById('password-icon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordIcon.classList.remove('fa-eye');
        passwordIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        passwordIcon.classList.remove('fa-eye-slash');
        passwordIcon.classList.add('fa-eye');
    }
}
</script>
@endpush
