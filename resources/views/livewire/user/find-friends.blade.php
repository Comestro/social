<div class="bg-[#f0f2f5] min-h-screen">
    <div class="max-w-[1200px] mx-auto pt-6 px-4">
        <h2 class="text-[20px] font-bold text-[#050505] mb-4">People You May Know</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            @foreach($users as $user)
                <div class="bg-white rounded-lg shadow-sm overflow-hidden border border-gray-200 flex flex-col">
                    <a href="{{ route('profile', ['id' => $user->id]) }}" class="aspect-square overflow-hidden cursor-pointer">
                        <img src="@if ($user->dp) {{ asset('storage/images/dp/' . $user->dp) }} @else {{ asset('images/dp.png') }} @endif"
                             alt="{{ $user->fname }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </a>
                    
                    <div class="p-3 flex flex-col flex-1">
                        <a href="{{ route('profile', ['id' => $user->id]) }}" class="font-semibold text-[#050505] text-[17px] leading-tight mb-1 hover:underline truncate">
                            {{ $user->fname }} {{ $user->lname }}
                        </a>
                        
                        <!-- Mutual friends placeholder -->
                        <div class="text-[13px] text-[#65676b] mb-3 flex items-center gap-1">
                            @if(rand(0,1))
                                <div class="flex -space-x-1">
                                    <img src="https://i.pravatar.cc/100?img={{ rand(1,10) }}" class="w-4 h-4 rounded-full border border-white">
                                    <img src="https://i.pravatar.cc/100?img={{ rand(11,20) }}" class="w-4 h-4 rounded-full border border-white">
                                </div>
                                <span>{{ rand(1, 20) }} mutual friends</span>
                            @else
                                <span>Suggested for you</span>
                            @endif
                        </div>

                        <div class="mt-auto space-y-2">
                            @if($user->id != auth()->user()->id)
                                <div class="w-full">
                                    <livewire:user.friendship-button :selectedUser="$user" :key="$user->id" />
                                </div>
                                <button class="w-full bg-[#e4e6eb] hover:bg-[#d8dadf] text-black font-semibold py-2 rounded-md text-[15px] transition">
                                    Remove
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
