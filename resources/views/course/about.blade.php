@props(['course', 'comments'])
<x-app-layout>

    <div class="flex flex-col md:flex-row items-center justify-center p-8 max-w-6xl mx-auto">

        <div class="w-full md:w-1/2 p-4">
            <img src="{{ asset('storage/'.$course->image_path) }}" alt="{{ $course->title }}" class="rounded-xl shadow-md w-full">
        </div>


        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-3xl font-bold mb-4">{{ $course->title }}</h2>
            <p class="text-green-600 text-xl font-semibold mb-2">${{ number_format($course->price, 2) }}</p>
            <p class="text-gray-700 mb-6">{{ $course->description }}</p>
            @auth
                @php
                    $isEnrolled = auth()->user()->courses->contains($course->id)
                @endphp

                @if($isEnrolled)
                    <a href="{{ route('lessons.show', $course->slug) }}" class="nav-item nav-link">Enter</a>
                @else
                    <form action="{{ route('courses.enroll', $course->slug) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link border-0 bg-transparent p-0" style="cursor: pointer;">
                            Enroll
                        </button>
                    </form>
                @endif
                @else
                    <a href="{{ route('login') }}" class="nav-item nav-link">Login to Enroll</a>
            @endauth

        </div>

    </div>

    <div class="text-center mb-5 mt-2">
        <h1>Recommendations</h1>
    </div>

    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="d-flex flex-column comment-section">
                    @foreach($comments as $comment)
                        <div class="bg-white p-2">
                            <div class="d-flex flex-row user-info"><img class="rounded-circle" src="{{ asset('storage/'.$comment->user->avatar) }}" width="50">
                                <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$comment->user->name}}</span><span class="date text-black-50"><u>Posted at:</u> {{$comment->published_at}} </span></div>
                            </div>
                            <div class="mt-2">
                                <p class="comment-text">{{$comment->content}}</p>
                            </div>
                        </div>
                    @endforeach
                    <br>
                    {{ $comments->links() }} <br>

                        @auth()
                            <form action="{{ route('courseComment.store', $course) }}" method="POST">
                            @csrf
                            <div class="bg-light p-2">
                                <div class="d-flex flex-row align-items-start">
                                    <img class="rounded-circle" src="{{ asset('storage/' . Auth::user()->avatar) }}" width="40">
                                    <textarea class="form-control ml-1 shadow-none textarea" name="body" placeholder="Write a comment..."></textarea>
                                </div>
                                <x-comment-submit-btn />
                            </div>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
