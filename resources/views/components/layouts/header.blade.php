<nav class="bg-white shadow-sm py-4">
    <div class="container mx-auto px-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <span class="text-xl font-bold">E-Learning</span>
        </div>
        <ul class="flex space-x-6 text-gray-700 font-medium">
            <li><a href="/" class="hover:text-indigo-600">Home</a></li>
            <li><a href="/courses" class="hover:text-indigo-600">Courses</a></li>
        </ul>
        <div class="flex items-center space-x-4">
            @guest()
                <a href="/login" class="bg-indigo-900 text-white px-6 py-2 rounded-xl hover:bg-indigo-800 transition">Login</a>
                <a href="/register" class="bg-indigo-900 text-white px-6 py-2 rounded-xl hover:bg-indigo-800 transition">Register</a>
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
