<header class="bg-gray-800/90 backdrop-blur-md shadow-lg border-b border-gray-700">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-cyan-400">
                <a href="{{ route('home') }}" class="hover:text-cyan-300 transition-colors">
                    ELMK.
                </a>
            </div>
            
            <ul class="hidden md:flex space-x-8 items-center">
                <li><a href="{{ route('home') }}" class="text-gray-300 hover:bg-cyan-600/20 hover:text-cyan-300 px-4 py-2 rounded-lg transition-all duration-300 {{ request()->routeIs('home') ? 'bg-cyan-600/20 text-cyan-300' : '' }}">Home</a></li>
                <li><a href="{{ route('portfolio', ['firstname' => 'Demo']) }}" class="text-gray-300 hover:bg-purple-600/20 hover:text-purple-300 px-4 py-2 rounded-lg transition-all duration-300">Portfolio</a></li>
                <li><a href="{{ route('blogs.index') }}" class="text-gray-300 hover:bg-blue-600/20 hover:text-blue-300 px-4 py-2 rounded-lg transition-all duration-300">Blogs</a></li>

                @if(session('user_email'))
                    <li class="flex items-center space-x-4">
                        <span class="text-gray-400 text-sm">
                            <i class="fas fa-user mr-1"></i>
                            {{ explode('@', session('user_email'))[0] }}
                        </span>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-300 hover:bg-red-600/20 hover:text-red-300 px-4 py-2 rounded-lg transition-all duration-300">
                                <i class="fas fa-sign-out-alt mr-1"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}" class="text-gray-300 hover:bg-yellow-600/20 hover:text-yellow-300 px-4 py-2 rounded-lg transition-all duration-300">
                        <i class="fas fa-sign-in-alt mr-1"></i>
                        Login
                    </a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-300 hover:bg-green-600/20 hover:text-green-300 px-4 py-2 rounded-lg transition-all duration-300">
                        <i class="fas fa-user-plus mr-1"></i>
                        Register
                    </a></li>
                @endif
            </ul>
            
            <div class="md:hidden">
                <button class="text-gray-300 hover:bg-gray-700/50 p-2 rounded-lg" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <div id="mobile-menu" class="md:hidden hidden pb-4">
            <div class="space-y-2">
                <a href="{{ route('home') }}" class="block text-gray-300 hover:bg-cyan-600/20 hover:text-cyan-300 px-4 py-2 rounded-lg transition-all duration-300">Home</a>
                <a href="{{ route('portfolio', ['firstname' => 'Demo']) }}" class="block text-gray-300 hover:bg-purple-600/20 hover:text-purple-300 px-4 py-2 rounded-lg transition-all duration-300">Portfolio</a>
                <a href="/projects" class="block text-gray-300 hover:bg-blue-600/20 hover:text-blue-300 px-4 py-2 rounded-lg transition-all duration-300">Projects</a>
                
                @if(session('user_email'))
                    <div class="border-t border-gray-700 pt-2 mt-2">
                        <span class="block text-gray-400 text-sm px-4 py-2">{{ explode('@', session('user_email'))[0] }}</span> {{-- adam --}}
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="block w-full text-left text-gray-300 hover:bg-red-600/20 hover:text-red-300 px-4 py-2 rounded-lg transition-all duration-300">
                                <i class="fas fa-sign-out-alt mr-1"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="border-t border-gray-700 pt-2 mt-2">
                        <a href="{{ route('login') }}" class="block text-gray-300 hover:bg-yellow-600/20 hover:text-yellow-300 px-4 py-2 rounded-lg transition-all duration-300">
                            <i class="fas fa-sign-in-alt mr-1"></i>
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="block text-gray-300 hover:bg-green-600/20 hover:text-green-300 px-4 py-2 rounded-lg transition-all duration-300">
                            <i class="fas fa-user-plus mr-1"></i>
                            Register
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </nav>
</header>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}
</script>
