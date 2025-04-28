@props(['course'])
<div class="col-lg-4 col-md-6 mb-4">
    <div class="rounded overflow-hidden mb-2 ">
        <img src="{{ asset('storage/' . $course->image_path) }}" class="w-full h-48 object-cover" alt="">
        <div class="bg-secondary p-4">
            <div class="d-flex justify-between mb-3">
                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>{{$course->students->count()}}</small>
                <small class="m-0"><i class="fas fa-book-open text-primary mr-2 "></i>{{count($course->lessons)}}</small>
            </div>
            <h6 class="text-center"><a href="{{route('courses.show', $course->slug)}}">{{$course->title}}</a></h6><br>
            <p>Author: <b>{{$course->mentor->full_name}}</b></p>
            <div class="border-top mt-4 pt-4">
                <div class="d-flex justify-content-between">
                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                    <h5 class="m-0">${{$course->price}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
