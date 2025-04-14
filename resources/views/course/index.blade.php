@props(['courses'])
<x-app-layout>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Popular Courses</h1>
            </div>
            <div class="row">
                @foreach($courses as $course)
                    <x-course-item :course="$course"/>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
