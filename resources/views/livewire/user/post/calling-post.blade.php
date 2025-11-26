<div>
    @foreach ($posts as $post)
    <div class="bg-white rounded-lg shadow-sm mb-4">
        <!-- Header -->
        <div class="flex items-center justify-between px-4 py-3">
            <div class="flex items-center gap-2">
                <a href="{{ route('profile', ['id' => $post->user->id]) }}" class="w-10 h-10 rounded-full overflow-hidden cursor-pointer">
                    @if ($post->user->dp)
                        <img src="{{ asset('storage/images/dp/' . $post->user->dp) }}" alt="Profile" class="w-full h-full object-cover">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ $post->user->name ?? 'User' }}&background=random" alt="Profile" class="w-full h-full object-cover">
                    @endif

                </a>
                <div class="flex flex-col">
                    <a href="{{ route('profile', ['id' => $post->user->id]) }}" class="font-semibold text-[#050505] text-[15px] hover:underline cursor-pointer">
                        {{ $post->user->fname }} {{ $post->user->lname }}
                    </a>
                    <div class="flex items-center gap-1 text-[#65676b] text-[13px]">
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                        <span>·</span>
                        <svg viewBox="0 0 16 16" width="12" height="12" fill="currentColor" title="Shared with Public">
                            <g fill-rule="evenodd" transform="translate(-448 -544)">
                                <path fill-rule="nonzero" d="M455.5 554.5c.552 0 1-.448 1-1s-.448-1-1-1-1 .448-1 1 .448 1 1 1zM452 548.5c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm1.007 5.242c-.255.447-.73.758-1.275.758a1.5 1.5 0 1 1 1.5-1.5c0 .276-.08.532-.225.742zM452 544a7.5 7.5 0 1 0 0 15 7.5 7.5 0 0 0 0-15z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <button class="text-[#65676b] hover:bg-gray-100 rounded-full p-2">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" /></svg>
            </button>
        </div>

        <!-- Content -->
        <div class="px-4 pb-2">
            <p class="text-[#050505] text-[15px] leading-normal">{{ $post->content }}</p>
        </div>

        @if ($post->image)
            <div class="w-full cursor-pointer">
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-full h-auto object-cover max-h-[600px]">
            </div>
        @endif

        <!-- Stats -->
        <div class="px-4 py-2 flex items-center justify-between text-[#65676b] text-[15px]">
            <div class="flex items-center gap-1">
                @if($post->likes()->count() > 0)
                    <div class="bg-blue-500 rounded-full p-1">
                        <svg class="w-2.5 h-2.5 text-white fill-current" viewBox="0 0 20 20"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" /></svg>
                    </div>
                    <span>{{ $post->likes()->count() }}</span>
                @endif
            </div>
            <div class="flex gap-3">
                <span class="hover:underline cursor-pointer">0 Comments</span>
                <span class="hover:underline cursor-pointer">0 Shares</span>
            </div>
        </div>

        <!-- Actions -->
        <div class="px-4 py-1">
            <div class="border-t border-gray-200 flex items-center justify-between pt-1">
                <button wire:click="likePost({{ $post->id }})" class="flex-1 flex items-center justify-center gap-2 py-2 rounded-lg hover:bg-gray-100 transition text-[#65676b] font-semibold text-[15px] {{ $post->likes()->where('user_id', auth()->id())->exists() ? 'text-blue-500' : '' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" /></svg>
                    <span>Like</span>
                </button>
                <button class="flex-1 flex items-center justify-center gap-2 py-2 rounded-lg hover:bg-gray-100 transition text-[#65676b] font-semibold text-[15px]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" /></svg>
                    <span>Comment</span>
                </button>
                <button class="flex-1 flex items-center justify-center gap-2 py-2 rounded-lg hover:bg-gray-100 transition text-[#65676b] font-semibold text-[15px]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" /></svg>
                    <span>Share</span>
                </button>
            </div>
        </div>
    </div>
    @endforeach
</div>