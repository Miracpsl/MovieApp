@if(!$continueWatching->isEmpty())
<div class="bg-third p-5 rounded-md mb-5 mt-5">
    <div class="swiper slider1">
        <div class="pb-1">
            <h2 class="bold mb-2 text-xl text-white">İzlemeye Devam Et</h2>
            <div class="swiper-button-prev custom-prev"></div>
            <div class="swiper-button-next custom-next"></div>
        </div>
        <div class="swiper-wrapper">
            @foreach($continueWatching as $item)
                @if($item->movie)
                <div class="swiper-slide">
                    <div class="overflow-hidden rounded-md cursor-pointer">
                        <a href="{{ route('movies.show', ['id' => $item->movie->id, 'start' => $item->progress]) }}" class="relative group">
                            <img src="{{ asset('storage/' . $item->movie->image) }}" alt="{{ $item->movie->title }}"
                                class="w-full h-full transition-transform duration-500 group-hover:scale-105"
                                onerror="this.onerror=null;this.src='{{ asset('images/fallback.jpg') }}';">
                            <div class="absolute bottom-0 left-0 right-0 w-full bg-gradient-to-t from-secondary via-secondary/75 opacity-0 group-hover:opacity-100 to-transparent transition-opacity duration-500 p-5">
                                <h2 class="text-xl font-bold line-clamp-1 text-white">{{ $item->movie->title }}</h2>
                                <p class="text-sm font-semibold text-white mt-1 flex">
                                    <i class="icon-Star text-xl text-yellow-600"> <span class="!text-md text-white">{{ $item->movie->vote_average }}/10</span> </i>
                                </p>
                                <p class="text-sm mt-2 line-clamp-3 text-white">{{ $item->movie->description }}</p>
                                <div class="flex text-white hover:translate-y-[-2px] transition-transform mt-3">
                                    <button type="button" class="transition-colors duration-300" onclick="toggleFavorite({{ $item->movie->id }}, '{{ asset('storage/' . $item->movie->image) }}')">
                                        <i class="icon-BookmarkOn text-xl"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endif


