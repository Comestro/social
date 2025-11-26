<div class="flex justify-between bg-[#f0f2f5] min-h-screen pt-4">
    <!-- Left Sidebar -->
    <div class="hidden lg:block w-[360px] fixed left-0 top-14 bottom-0 overflow-y-auto hover:overflow-y-scroll no-scrollbar px-2 py-4">
        <livewire:user.sidebar />
    </div>

    <!-- Main Feed -->
    <div class="w-full lg:w-[590px] mx-auto pb-8">
        <!-- Stories (Placeholder) -->
        <div class="relative h-[200px] mb-6 flex gap-2 overflow-x-auto no-scrollbar">
            <!-- Add Story Card -->
            <div class="min-w-[112px] h-full bg-white rounded-xl shadow overflow-hidden relative cursor-pointer group">
                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'User' }}&background=random" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute bottom-0 w-full bg-white h-12 flex justify-center items-center">
                    <div class="w-8 h-8 bg-blue-500 rounded-full border-4 border-white flex items-center justify-center -mt-8 text-white font-bold text-xl">+</div>
                </div>
                <div class="absolute bottom-2 w-full text-center text-xs font-semibold text-black">Create story</div>
            </div>
            <!-- Story 1 -->
            <div class="min-w-[112px] h-full bg-gray-200 rounded-xl overflow-hidden relative cursor-pointer">
                <img src="https://picsum.photos/200/300?random=1" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                <div class="absolute top-2 left-2 w-8 h-8 rounded-full border-4 border-blue-500 overflow-hidden">
                    <img src="https://i.pravatar.cc/100?img=1" class="w-full h-full object-cover">
                </div>
                <div class="absolute bottom-2 left-2 text-white font-semibold text-sm shadow-black drop-shadow-md">John Doe</div>
            </div>
             <!-- Story 2 -->
             <div class="min-w-[112px] h-full bg-gray-200 rounded-xl overflow-hidden relative cursor-pointer">
                <img src="https://picsum.photos/200/300?random=2" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                <div class="absolute top-2 left-2 w-8 h-8 rounded-full border-4 border-blue-500 overflow-hidden">
                    <img src="https://i.pravatar.cc/100?img=2" class="w-full h-full object-cover">
                </div>
                <div class="absolute bottom-2 left-2 text-white font-semibold text-sm shadow-black drop-shadow-md">Jane Smith</div>
            </div>
        </div>

        <livewire:user.post.create-form />
        <livewire:user.post.calling-post />
    </div>

    <!-- Right Sidebar -->
    <div class="hidden xl:block w-[360px] fixed right-0 top-14 bottom-0 overflow-y-auto hover:overflow-y-scroll no-scrollbar px-2 py-4">
        <div class="mb-4">
            <h3 class="text-gray-500 font-semibold text-[17px] mb-2 px-2">Sponsored</h3>
            <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition">
                <div class="w-[120px] h-[120px] rounded-lg overflow-hidden bg-gray-300 shrink-0">
                     <img src="https://picsum.photos/200?random=10" class="w-full h-full object-cover">
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold text-[15px] text-[#050505]">Premium Courses</span>
                    <span class="text-[13px] text-[#65676b]">example.com</span>
                </div>
            </a>
        </div>
        <hr class="my-4 border-gray-300 mx-2">
        <livewire:user.onlinefriends />
    </div>
</div>
