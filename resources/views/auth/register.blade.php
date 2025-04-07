<x-base-layout>

    <div class="min-h-screen bg-white flex items-center justify-center p-4">
        <div class="max-w-lg w-full mx-auto bg-white rounded-lg shadow-md px-8 py-10">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-8">Register for E-Learning</h1>

            <form action="{{ route('register') }}" method="POST" class="w-full flex flex-col gap-6" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-sm font-medium text-gray-700">Full Name:</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="email" class="text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex flex-col gap-1">
                    <label class="text-sm font-medium text-gray-700">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex flex-col gap-1">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="avatar">Upload your avatar</label>
                    <input name="avatar" class="block p-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none" id="avatar" type="file">
                </div>

                <button type="submit" class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-md shadow-sm transition duration-200">
                    Register
                </button>
            </form>

            <div class="mt-6 text-center">
                <span class="text-sm text-gray-500">Already have an account? </span>
                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Login</a>
            </div>
        </div>
    </div>
</x-base-layout>
