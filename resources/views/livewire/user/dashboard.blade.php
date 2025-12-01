<div class="flex justify-between bg-[#f0f2f5] min-h-screen pt-4">
    <!-- Left Sidebar -->
    <div class="hidden lg:block w-[360px] fixed left-0 top-14 bottom-0 overflow-y-auto hover:overflow-y-scroll no-scrollbar px-2 py-4">
        <livewire:user.sidebar />
    </div>

    <!-- Main Feed -->
    <div class="w-full lg:w-[590px] mx-auto pb-8">
        <!-- Stories (Placeholder) -->
        <livewire:user.story />

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
