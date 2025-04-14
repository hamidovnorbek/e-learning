<nav class="bg-white shadow-sm py-4">
    <div class="container mx-auto px-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <span class="text-xl font-bold">E-Learning</span>
        </div>
        <div class="flex items-center space-x-6">
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/comment" class="nav-item nav-link">Forum</a>
            <a href="/courses" class="nav-item nav-link">Courses</a>
            <a href="/teachers" class="nav-item nav-link">Teachers</a>
            @guest()
                <a href="/login" class="px-6 nav-item nav-link">Login</a>
                <a href="/register" class=" px-6 nav-item nav-link">Register</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-indigo-900 text-white px-6 py-2 rounded-xl hover:bg-indigo-800 transition">
                        Logout
                    </button>
                </form>
            @endguest
        </div>
    </div>
</nav>
