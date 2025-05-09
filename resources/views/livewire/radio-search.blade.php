<?php
use App\Models\Radio;
?>
<div>
    <div class="mb-6">
        <div class="relative">
            <input
                type="text"
                wire:model.live="search"
                placeholder="Search radio stations..."
                class="w-full px-4 py-3 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 pl-10"
            >
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4">
        @foreach($radios as $radio)
            <div class="bg-gray-800 p-4 rounded-lg hover:bg-gray-700 transition radio-card relative group">
                <div class="absolute top-2 right-2 z-10">
                    <button wire:click.stop="toggleFavorite({{ $radio->id }})" class="text-3xl focus:outline-none">
                        @if($radio->isFavorite())
                            <svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                            </svg>
                        @else
                            <svg class="h-8 w-8 text-gray-400 hover:text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                            </svg>
                        @endif
                    </button>
                </div>
                <div class="cursor-pointer"
                     data-url="{{ $radio->url }}"
                     data-name="{{ $radio->name }}"
                     data-language="{{ $radio->language }}"
                     data-icon="{{ $radio->icon ?? Radio::DEFAULT_ICON }}">
                    <div class="relative overflow-hidden rounded-md mb-4">
                        <img src="{{ $radio->icon ?? Radio::DEFAULT_ICON }}" alt="{{ $radio->name }}" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <h3 class="text-lg font-medium truncate">{{ $radio->name }}</h3>
                    <p class="text-sm text-gray-400">{{ $radio->language }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
