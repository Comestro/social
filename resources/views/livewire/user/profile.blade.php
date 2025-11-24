<div class="flex flex-1">
    {{-- In work, do what you enjoy. --}}

    <div class="w-full p-3 mt-7">
        {{-- main content --}}
        <div class="w-8/12 ">

            <div class=" h-96 relative bg-white">

                {{-- cover image --}}
                <div class="h-full bg-gray-300">
                    <img src="@if (auth()->user()->cover) {{ asset('storage/images/cover/' . auth()->user()->cover) }} @else {{ asset('images/cover.jpg') }} @endif"
                        alt="Cover Image" class="w-full h-full object-cover">
                </div>
                {{-- change cover button --}}
                <div class="absolute right-0 top-0 p-2 bg-gradient-to-t from-black via-white/10 to-black/0 w-full h-full">
                    <form wire:submit.prevent="updateProfile" method="post" enctype="multipart/form-data"
                        class="flex">   
                        <input type="file" class="hidden" wire:model="cover" id="uploadCover">
                        <label class="bg-sky-600/20 text-white rounded px-2 py-1 " for="uploadCover">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                            </svg>
                        </label>
                        <button type="submit" title="Change cover Image" class="hidden">
                        </button>

                    </form>
                </div>
                {{-- profile image --}}
                <div class="absolute left-24 bottom-0 transform translate-y-1/3">
                    <div class="w-32 h-32 rounded-full border-4 border-white overflow-hidden bg-gray-300">
                        <img src="@if (auth()->user()->dp) {{ asset('storage/images/dp/' . auth()->user()->dp) }} @else {{ asset('images/dp.png') }} @endif"
                            alt="Profile Image" class="w-full h-full object-cover">
                    </div>
                    {{-- change profile button --}}
                    <div class="absolute right-0 bottom-0 p-1">
                        <form wire:submit.prevent="updateProfile" method="post" enctype="multipart/form-data"
                            class="flex">
                            <input type="file" class="hidden" wire:model="dp" id="uploadDp">
                            <label for="uploadDp" class="bg-sky-600/20 text-white px-2 py-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                </svg>
                            </label>
                            <button title="Change Profile Image" class="hidden">

                            </button>
                    </div>
                </div>

                {{-- profile name and update profile button --}}
                <div class="-mt-10 ml-60 absolute">
                    <h2 class="text-2xl font-bold text-white">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</h2>
                  
                {{-- ads --}}
                <div class="w-2/12">

                </div>
                {{-- online friends --}}
                <div class="w-2/12"></div>

            </div>

            <div class="flex flex-1 mt-14">
                <div class="w-4/12 p-3 mr-3 rounded-lg">
                    {{-- about me --}}
                    <h3 class="text-lg font-bold mb-2">About Me</h3>
                    <p>{{ auth()->user()->bio ?? 'This user has not added a bio yet.' }}</p>
                </div>
                <div class="w-8/12">
                    <livewire:user.post.create-form />
                    {{-- user posts --}}
                    @livewire('user.post.calling-post', ['self' => true])
                </div>
            </div>
        </div>
        <div class="w-2/12">
            {{-- ads --}}
        </div>
    <div class="w-2/12 h-screen overflow-y-auto bg-white p-3 rounded-lg shadow fixed top-16 right-0">
            {{-- online friends --}}
            <livewire:user.onlinefriends />
        </div>
    </div>
</div>
