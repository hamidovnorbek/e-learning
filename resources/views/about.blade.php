<x-app-layout>
    <div class="text-center mb-5 mt-2">
        <h1>Questions && Answers</h1>
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
                        @auth()
                            <form action="{{ route('comment.store') }}" method="POST">
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
