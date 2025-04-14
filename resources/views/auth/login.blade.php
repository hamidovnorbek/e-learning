<x-app-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 display:block">
        <div class="max-w-xl w-full py-6 px-8 bg-white rounded shadow-xl">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="text-sm font-medium text-gray-700">Email:</label>
                    <input type="text" name="email" id="email" placeholder="example@email.com"
                           class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 focus:border-indigo-600" />
                </div>
                <div class="mb-4">
                    <label for="password" class="text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" placeholder="password"
                           class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 focus:border-indigo-600" />
                    <a href="/register" class="text-sm font-thin text-gray-800 hover:underline mt-2 inline-block hover:text-indigo-600">You don't have any account</a>
                </div>
                <button class="cursor-pointer py-2 px-4 block mt-6 bg-indigo-500 text-white font-bold w-full text-center rounded hover:bg-indigo-600 transition">
                    Login
                </button>
            </form>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>


</x-app-layout>
