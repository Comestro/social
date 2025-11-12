<div class="min-h-screen flex gap-5 items-stretch justify-center bg-gray-100 py-10">
    {{-- Be like water. --}}

    <!-- sidebar -->
    <div class="w-2/12">
        <livewire:user.sidebar />
    </div>
    <!-- post area -->
    <div class="w-5/12">
        <livewire:user.post.create-form />
        <livewire:user.post.calling-post />
    </div>
    <!-- ads section -->
    <div class="w-3/12"></div>
    <!-- online users -->
    <div class="w-2/12"></div>
</div>
