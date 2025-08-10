<footer class="bg-gray-900/90 border-t border-gray-800 text-center py-8 mt-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <!-- Copyright -->
            <div class="text-gray-400">
                <p>&copy; {{ date('Y') }} Adam El Mekadem. All rights reserved.</p>
                <p class="text-sm text-gray-500 mt-1">Built with Laravel & Tailwind CSS</p>
            </div>
            
            <div class="flex space-x-6">
                <a href="https://github.com/Adam-Elmekadem" class="text-gray-400 hover:text-cyan-400 transition-colors" title="GitHub">
                    <i class="fab fa-github text-xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/adam-elmekadem-9a638231a/" class="text-gray-400 hover:text-blue-400 transition-colors" title="LinkedIn">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-purple-400 transition-colors" title="Portfolio">
                    <i class="fas fa-globe text-xl"></i>
                </a>
                <a href="mailto:adamelmekadem61@gmail.com" class="text-gray-400 hover:text-red-400 transition-colors" title="Email">
                    <i class="fas fa-envelope text-xl"></i>
                </a>
            </div>
            
            <div class="flex space-x-4 text-sm">
                <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Home</a>
                <span class="text-gray-600">|</span>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy</a>
                <span class="text-gray-600">|</span>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms</a>
            </div>
        </div>
    </div>
</footer>
