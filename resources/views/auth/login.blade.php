<x-base-layout>


{{--   <div class="container">--}}
{{--       <div class="max-w-xl py-6 px-8 h-80 mt-20 bg-white rounded shadow-xl text">--}}
{{--           <form action="">--}}
{{--               <div class="mb-6">--}}
{{--                   <label for="name" class="block text-gray-800 font-bold">Name:</label>--}}
{{--                   <input type="text" name="name" id="name" placeholder="username" class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />--}}
{{--               </div>--}}
{{--               <div>--}}
{{--                   <label for="email" class="block text-gray-800 font-bold">Email:</label>--}}
{{--                   <input type="text" name="email" id="email" placeholder="@email" class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600" />--}}
{{--                   <a href="#" class="text-sm font-thin text-gray-800 hover:underline mt-2 inline-block hover:text-indigo-600">Forget Password</a>--}}
{{--               </div>--}}
{{--               <button class="cursor-pointer py-2 px-4 block mt-6 bg-indigo-500 text-white font-bold w-full text-center rounded">Login</button>--}}
{{--           </form>--}}
{{--       </div>--}}
{{--   </div>--}}

    <div class="min-h-screen flex items-center justify-center bg-gray-50 display:block">
        <div class="max-w-xl w-full py-6 px-8 bg-white rounded shadow-xl">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-gray-800 font-bold">Email:</label>
                    <input type="text" name="email" id="email" placeholder="example@email.com"
                           class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 focus:border-indigo-600" />
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-800 font-bold">Password:</label>
                    <input type="password" name="password" id="password" placeholder="password"
                           class="w-full border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 focus:border-indigo-600" />
                    <a href="#" class="text-sm font-thin text-gray-800 hover:underline mt-2 inline-block hover:text-indigo-600">Forget Password</a>
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


</x-base-layout>
