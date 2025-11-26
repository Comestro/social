<div class="bg-white rounded-lg shadow-sm p-4 mb-4">
    <div class="flex items-center gap-3 mb-4">
        <div class="w-10 h-10 rounded-full overflow-hidden bg-gray-200 cursor-pointer">
            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'User' }}&background=random" alt="Profile" class="w-full h-full object-cover">
        </div>
        <div class="flex-1 bg-[#f0f2f5] rounded-full hover:bg-[#e4e6eb] cursor-pointer transition">
            <form wire:submit.prevent="createPost" class="w-full">
                <input type="text" wire:model="content" placeholder="What's on your mind, {{ auth()->user()->fname ?? 'User' }}?" class="w-full bg-transparent border-none focus:ring-0 px-4 py-2.5 text-[#050505] placeholder-gray-500 text-[17px] rounded-full cursor-pointer">
                
                <!-- Hidden inputs for functionality -->
                <input type="file" wire:model="image" id="post-image" class="hidden">
                <button type="submit" class="hidden"></button>
            </form>
        </div>
    </div>
    
    
    @if ($image)
        <div class="mb-4 relative">
            <img src="{{ $image->temporaryUrl() }}" alt="Preview" class="rounded-lg max-h-[300px] w-full object-cover">
            <button wire:click="$set('image', null)" class="absolute top-2 right-2 bg-white rounded-full p-1 shadow hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    @endif


    <div class="border-t border-gray-200 pt-2 flex justify-between">
        <button class="flex-1 flex items-center justify-center gap-2 py-2 rounded-lg hover:bg-gray-100 transition">
            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/v1iF2605Cb5.png" class="w-6 h-6" alt="Live Video">
            <span class="font-semibold text-[#65676b] text-[15px]">Live video</span>
        </button>
        <label for="post-image" class="flex-1 flex items-center justify-center gap-2 py-2 rounded-lg hover:bg-gray-100 transition cursor-pointer">
            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/a6OjkIIE-R0.png" class="w-6 h-6" alt="Photo/Video">
            <span class="font-semibold text-[#65676b] text-[15px]">Photo/video</span>
        </label>
        <button class="flex-1 flex items-center justify-center gap-2 py-2 rounded-lg hover:bg-gray-100 transition hidden sm:flex">
            <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/yMDS19UDsWe.png" class="w-6 h-6" alt="Feeling/Activity">
            <span class="font-semibold text-[#65676b] text-[15px]">Feeling/activity</span>
        </button>
    </div>
</div>

