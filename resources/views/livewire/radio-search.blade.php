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
            <div class="bg-gray-800 p-4 rounded-lg hover:bg-gray-700 cursor-pointer transition radio-card"
                 data-url="{{ $radio->url }}"
                 data-name="{{ $radio->name }}"
                 data-language="{{ $radio->language }}"
                 data-icon="{{ $radio->icon ?? Radio::DEFAULT_ICON }}">
                <img src="{{ $radio->icon ?? Radio::DEFAULT_ICON }}" alt="{{ $radio->name }}" class="w-full h-48 object-cover rounded-md mb-4">
                <h3 class="text-lg font-medium">{{ $radio->name }}</h3>
                <p class="text-sm text-gray-400">{{ $radio->language }}</p>
            </div>
        @endforeach
    </div>
</div>
