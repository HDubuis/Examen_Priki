<div class="px-4 py-4 bg-gray-100 rounded">
    <div class="flex items-center">
        <!-- Vote -->
        <div class="flex flex-col items-center mr-8 text-center">
            <button class="bg-gray-300 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </button>
            <span
                class="w-full my-2 text-4xl bg-green-200 rounded-md font-semibold 
                {{ $opinion->points() < 0 ? 'text-red-500' : ($opinion->points() > 0 ? 'text-green-500' : 'text-gray-500') }}">
                {{ $opinion->points() }}
            </span>
            <button class="bg-gray-300 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

        <!-- Opinion -->
        <div>
            <p class="inline">{{ $opinion->description }}</p>
            <a href="#" class="inline text-purple-600 hover:text-purple-400">
                {{ $opinion->user->name }}
            </a>
            <span class="text-gray-500">
                {{ $opinion->created_at->translatedFormat('d.m.y - h\hm') }}
            </span>
        </div>
    </div>

    <!-- Comments !-->
    <div class="ml-20 mt-8">
        <livewire:practice.opinion-comments :comments="$opinion->feedbacks->where('comment', '!=', '')" />
    </div>
</div>
