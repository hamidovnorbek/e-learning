@props(['courses'])
<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-8">Courses</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($courses as $course)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                    <img src="{{ asset('storage/' . $course->image_path) }}" alt="Express Backend" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">{{$course->title}}</h3>
                        <p class="text-sm text-gray-500 mb-1">Mentor: Ozodbek Rajabboyev</p>
                        <p class="flex mb-2 items-center text-gray-600 text-sm">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 01-2 2H9a2 2 0 010-4h6a2 2 0 012 2z"></path>
                            </svg>
                            Lessons : {{ count($course->lessons) }}
                        </p>
{{--                        <a  href="#" class="mt-4 w-full bg-indigo-900 text-white py-2 rounded-xl hover:bg-indigo-800 transition">Enroll</a>--}}

                        <a href="{{ route('courses.show', $course->slug) }}" class="text-white bg-blue-700 hover:bg-blue-800 mt-1 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enroll</a>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
