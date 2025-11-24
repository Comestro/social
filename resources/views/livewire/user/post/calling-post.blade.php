<div>
        @foreach ($posts as $post)
        <div class="w-full mt-5 flex items-stretch justify-center bg-gray-100">
            <div class="w-full bg-white p-4 rounded shadow">
                <!-- user with avatar -->
                <div class="flex items-center mb-2">
                    <img src="{{ ($post->user->dp) ? asset("storage/images/dp/".$post->user->dp) : asset('user-default.jpg') }}" alt="{{ $post->user->fname }}'s avatar" class="w-16 h-16 rounded-full mr-1">
                    <div class="flex flex-col justify-start">
                        <h2 class="text-lg font-bold">{{ $post->user->fname }} {{ $post->user->lname }}</h2>
                    <span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                </div>
               
                <p class="text-gray-700 text-xl">{{ $post->content }}</p>
                 {{-- image --}}
                @if ($post->image)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="max-w-full h-auto rounded">
                    </div>
                @endif
                <!-- like, comment, share buttons -->
                <div class="flex items-center mt-4">
                    <button wire:click="likePost({{ $post->id }})" class="text-blue-500 hover:underline mr-4">Like {{ ($post->likes()->count() > 0) ? "(".$post->likes()->count() .")" : "" }}</button>
                    <button class="text-blue-500 hover:underline mr-4">Comment</button>
                    <button class="text-blue-500 hover:underline">Share</button>
                </div>
            </div>
    </div>
         @endforeach
   

</div>