<div>
    <div class=" flex flex-col items-stretch justify-center bg-gray-100">
        <!-- post creation area -->
        <div class="w-full bg-white p-4 rounded shadow">
            <form wire:submit.prevent="createPost" class="flex flex-col">
               
                <div class="mb-4">
                    <textarea id="content" rows="4" wire:model="content" class="w-full px-3 py-2 border-0 rounded text-3xl focus:border-0 focus:outline-0" placeholder="What's on your mind?"></textarea>
                    @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class=" px-3 bg-sky-600 text-white py-2 rounded hover:bg-sky-800 self-end">Create Post</button>
            </form>
        </div>
        
    </div>
</div>

