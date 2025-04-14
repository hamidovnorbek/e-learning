@props(['lessons'])
<x-app-layout>
    @foreach($lessons as $lesson)
        <div class="flex justify-center items-center my-5">
            <div>
                @if ($lessons->hasPages())
                    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center space-x-1">
                        {{-- Previous Page Link --}}
                        @if ($lessons->onFirstPage())
                            <span class="px-3 py-1 text-sm text-gray-400 bg-gray-100 rounded-md">Previous</span>
                        @else
                            <a href="{{ $lessons->previousPageUrl() }}" class="px-3 py-1 text-sm text-purple-600 border border-purple-300 rounded-md hover:bg-purple-100 transition">Previous</a>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($lessons->links()->elements[0] as $page => $url)
                            @if ($page == $lessons->currentPage())
                                <span class="px-3 py-1 bg-purple-600 text-white rounded-md shadow-md">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="px-3 py-1 text-purple-600 hover:bg-purple-100 rounded-md transition">{{ $page }}</a>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($lessons->hasMorePages())
                            <a href="{{ $lessons->nextPageUrl() }}" class="px-3 py-1 text-sm text-purple-600 border border-purple-300 rounded-md hover:bg-purple-100 transition">Next</a>
                        @else
                            <span class="px-3 py-1 text-sm text-gray-400 bg-gray-100 rounded-md">Next</span>
                        @endif
                    </nav>
                @endif
                <h1 class="text-3xl font-bold text-center  mt-3 mb-3">{{ $lesson->title }}</h1>

            <video width="640" height="360" class="mx-auto rounded-lg" controls>
                <source src="{{ Storage::url($lesson->video_path) }}" type="video/mp4">
                Brauzeringiz videoni qo‘llab-quvvatlamaydi.
            </video>

            <p class="mt-2">{{ $lesson->description }}</p>
        </div>
    @endforeach
</x-app-layout>
