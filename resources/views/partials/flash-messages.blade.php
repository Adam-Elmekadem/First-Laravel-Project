<!-- Flash Messages -->
@if (session('success'))
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <div class="bg-green-500/20 border border-green-400/50 text-green-300 px-6 py-4 rounded-lg shadow-lg">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-3 text-green-400 text-lg"></i>
                <div>
                    <strong class="font-semibold">Success!</strong>
                    <p class="mt-1">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <div class="bg-red-500/20 border border-red-400/50 text-red-300 px-6 py-4 rounded-lg shadow-lg">
            <div class="flex items-center">
                <i class="fas fa-exclamation-triangle mr-3 text-red-400 text-lg"></i>
                <div>
                    <strong class="font-semibold">Error!</strong>
                    <p class="mt-1">{{ session('error') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('warning'))
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <div class="bg-yellow-500/20 border border-yellow-400/50 text-yellow-300 px-6 py-4 rounded-lg shadow-lg">
            <div class="flex items-center">
                <i class="fas fa-exclamation-circle mr-3 text-yellow-400 text-lg"></i>
                <div>
                    <strong class="font-semibold">Warning!</strong>
                    <p class="mt-1">{{ session('warning') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

@if (session('info'))
    <div class="max-w-7xl mx-auto px-4 mt-4">
        <div class="bg-blue-500/20 border border-blue-400/50 text-blue-300 px-6 py-4 rounded-lg shadow-lg">
            <div class="flex items-center">
                <i class="fas fa-info-circle mr-3 text-blue-400 text-lg"></i>
                <div>
                    <strong class="font-semibold">Info!</strong>
                    <p class="mt-1">{{ session('info') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
