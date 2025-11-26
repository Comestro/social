<div class="bg-[#f0f2f5] min-h-screen">
    <!-- Profile Header -->
    <div class="bg-white shadow-sm pb-4">
        <div class="max-w-[1095px] mx-auto px-4 lg:px-0">
            <!-- Cover Photo -->
            <div class="relative h-[350px] md:h-[400px] rounded-b-xl overflow-hidden bg-gray-300 group">
                <img src="@if ($selectedUser->cover) {{ asset('storage/images/cover/' . $selectedUser->cover) }} @else {{ asset('images/cover.jpg') }} @endif"
                     alt="Cover Photo" class="w-full h-full object-cover">
                
                @if ($selectedUser->id == auth()->user()->id)
                <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                    <form wire:submit.prevent="updateProfile" method="post" enctype="multipart/form-data">
                        <input type="file" class="hidden" wire:model.live="cover" id="uploadCover">
                        <label for="uploadCover" class="bg-white hover:bg-gray-100 text-black px-3 py-2 rounded-md font-semibold text-[15px] cursor-pointer flex items-center gap-2 shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4z" /><path d="M10 14a4 4 0 100-8 4 4 0 000 8z" /></svg>
                            <span>Edit Cover Photo</span>
                        </label>
                        <button type="submit" class="hidden"></button>
                    </form>
                </div>
                @endif
            </div>

            <!-- Profile Info Section -->
            <div class="flex flex-col md:flex-row items-center md:items-end -mt-8 md:-mt-8 px-4 md:px-8 pb-4 border-b border-gray-300 relative z-10">
                <!-- Profile Picture -->
                <div class="relative">
                    <div class="w-[168px] h-[168px] rounded-full border-[4px] border-white bg-white overflow-hidden relative group">
                        <img src="@if ($selectedUser->dp) {{ asset('storage/images/dp/' . $selectedUser->dp) }} @else {{ asset('images/dp.png') }} @endif"
                             alt="Profile Picture" class="w-full h-full object-cover">
                        
                        @if ($selectedUser->id == auth()->user()->id)
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                             <form wire:submit.prevent="updateProfile" method="post" enctype="multipart/form-data">
                                <input type="file" class="hidden" wire:model.live="dp" id="uploadDp">
                                <label for="uploadDp" class="cursor-pointer">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4z" /><path d="M10 14a4 4 0 100-8 4 4 0 000 8z" /></svg>
                                </label>
                                <button type="submit" class="hidden"></button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Name & Friends -->
                <div class="flex-1 text-center md:text-left mt-4 md:mt-0 md:ml-6 md:mb-4">
                    <h1 class="text-[32px] font-bold text-[#050505] leading-tight">{{ $selectedUser->fname }} {{ $selectedUser->lname }}</h1>
                    <span class="text-[#65676b] font-semibold text-[15px]">1.2K friends</span>
                    <div class="flex items-center justify-center md:justify-start mt-1 -space-x-2">
                         <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=1" alt="">
                         <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=2" alt="">
                         <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=3" alt="">
                         <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=4" alt="">
                         <img class="w-8 h-8 rounded-full border-2 border-white" src="https://i.pravatar.cc/100?img=5" alt="">
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-2 mt-4 md:mt-0 md:mb-6">
                    @if ($selectedUser->id == auth()->user()->id)
                        <button class="bg-[#1877f2] hover:bg-[#166fe5] text-white px-4 py-2 rounded-md font-semibold text-[15px] flex items-center gap-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                            <span>Add to Story</span>
                        </button>
                        <button class="bg-[#e4e6eb] hover:bg-[#d8dadf] text-black px-4 py-2 rounded-md font-semibold text-[15px] flex items-center gap-2">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" /></svg>
                            <span>Edit profile</span>
                        </button>
                    @else
                        <livewire:user.friendship-button :selectedUser="$selectedUser" />
                        <button class="bg-[#e4e6eb] hover:bg-[#d8dadf] text-black px-4 py-2 rounded-md font-semibold text-[15px] flex items-center gap-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" /></svg>
                            <span>Message</span>
                        </button>
                    @endif
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex items-center gap-1 pt-1">
                <a href="#" class="px-4 py-4 text-blue-600 font-semibold border-b-[3px] border-blue-600 text-[15px]">Posts</a>
                <a href="#" class="px-4 py-4 text-[#65676b] font-semibold hover:bg-gray-100 rounded-lg text-[15px]">About</a>
                <a href="#" class="px-4 py-4 text-[#65676b] font-semibold hover:bg-gray-100 rounded-lg text-[15px]">Friends</a>
                <a href="#" class="px-4 py-4 text-[#65676b] font-semibold hover:bg-gray-100 rounded-lg text-[15px]">Photos</a>
                <a href="#" class="px-4 py-4 text-[#65676b] font-semibold hover:bg-gray-100 rounded-lg text-[15px]">Videos</a>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="max-w-[1095px] mx-auto px-4 lg:px-0 py-4 flex flex-col md:flex-row gap-4">
        <!-- Left Column -->
        <div class="w-full md:w-[40%] space-y-4">
            <!-- Intro -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <h2 class="text-[20px] font-bold text-[#050505] mb-3">Intro</h2>
                <div class="text-center mb-4">
                    <p class="text-[15px] text-[#050505] mb-4">{{ $selectedUser->bio ?? 'Add a short bio to tell people more about yourself.' }}</p>
                    @if ($selectedUser->id == auth()->user()->id)
                        <button class="w-full bg-[#e4e6eb] hover:bg-[#d8dadf] text-black font-semibold py-2 rounded-md text-[15px]">Edit Bio</button>
                    @endif
                </div>
                <div class="space-y-3 text-[15px] text-[#050505]">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#8c939d]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" /></svg>
                        <span>Joined {{ $selectedUser->created_at->format('F Y') }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-[#8c939d]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                        <span>From <strong>New York, USA</strong></span>
                    </div>
                </div>
                @if ($selectedUser->id == auth()->user()->id)
                    <button class="w-full bg-[#e4e6eb] hover:bg-[#d8dadf] text-black font-semibold py-2 rounded-md text-[15px] mt-4">Edit Details</button>
                @endif
            </div>

            <!-- Photos -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-3">
                    <h2 class="text-[20px] font-bold text-[#050505]">Photos</h2>
                    <a href="#" class="text-blue-600 text-[15px] hover:underline">See all photos</a>
                </div>
                <div class="grid grid-cols-3 gap-1 rounded-lg overflow-hidden">
                    <img src="https://picsum.photos/150?random=1" class="w-full h-full object-cover aspect-square">
                    <img src="https://picsum.photos/150?random=2" class="w-full h-full object-cover aspect-square">
                    <img src="https://picsum.photos/150?random=3" class="w-full h-full object-cover aspect-square">
                    <img src="https://picsum.photos/150?random=4" class="w-full h-full object-cover aspect-square">
                    <img src="https://picsum.photos/150?random=5" class="w-full h-full object-cover aspect-square">
                    <img src="https://picsum.photos/150?random=6" class="w-full h-full object-cover aspect-square">
                </div>
            </div>

            <!-- Friends -->
            <div class="bg-white p-4 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-1">
                    <h2 class="text-[20px] font-bold text-[#050505]">Friends</h2>
                    <a href="#" class="text-blue-600 text-[15px] hover:underline">See all friends</a>
                </div>
                <span class="text-[#65676b] text-[15px] mb-3 block">1,234 friends</span>
                <div class="grid grid-cols-3 gap-2">
                    <div class="mb-2">
                        <img src="https://i.pravatar.cc/150?img=10" class="w-full aspect-square rounded-lg object-cover mb-1">
                        <span class="text-[13px] font-semibold text-[#050505] leading-tight block">Friend One</span>
                    </div>
                    <div class="mb-2">
                        <img src="https://i.pravatar.cc/150?img=11" class="w-full aspect-square rounded-lg object-cover mb-1">
                        <span class="text-[13px] font-semibold text-[#050505] leading-tight block">Friend Two</span>
                    </div>
                    <div class="mb-2">
                        <img src="https://i.pravatar.cc/150?img=12" class="w-full aspect-square rounded-lg object-cover mb-1">
                        <span class="text-[13px] font-semibold text-[#050505] leading-tight block">Friend Three</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="w-full md:w-[60%]">
            @if ($selectedUser->id == auth()->user()->id)
                <livewire:user.post.create-form />
            @endif
            
            <!-- Filter Posts -->
            <div class="bg-white p-4 rounded-lg shadow-sm mb-4 flex justify-between items-center">
                <h2 class="text-[20px] font-bold text-[#050505]">Posts</h2>
                <div class="flex gap-2">
                    <button class="bg-[#e4e6eb] hover:bg-[#d8dadf] text-black px-3 py-1.5 rounded-md font-semibold text-[15px] flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" /></svg>
                        <span>Filters</span>
                    </button>
                    <button class="bg-[#e4e6eb] hover:bg-[#d8dadf] text-black px-3 py-1.5 rounded-md font-semibold text-[15px] flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" /></svg>
                        <span>Manage Posts</span>
                    </button>
                </div>
            </div>

            @livewire('user.post.calling-post', ['selectedUser' => $selectedUser])
        </div>
    </div>
</div>
