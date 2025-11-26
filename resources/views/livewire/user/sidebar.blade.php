<div>
    <ul class="space-y-1">
        <li>
            <a href="{{ route('profile') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                <div class="w-9 h-9 rounded-full overflow-hidden border border-gray-200">
                    @if (auth()->user()->dp)
                        <img src="{{ asset('storage/images/dp/' . auth()->user()->dp) }}" alt="Profile" class="w-full h-full object-cover">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'User' }}&background=random" alt="Profile" class="w-full h-full object-cover">
                    @endif
                </div>
                <span class="font-medium text-[15px] text-[#050505]">{{ auth()->user()->name ?? 'User' }}</span>
            </a>
        </li>
        <li>
            <a href="{{ route('find.friends') }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/S0U5ECzYUSu.png" class="w-9 h-9" alt="Friends">
                <span class="font-medium text-[15px] text-[#050505]">Friends</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/PrjLkDYpYbH.png" class="w-9 h-9" alt="Groups">
                <span class="font-medium text-[15px] text-[#050505]">Groups</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/D2y-jJ2C_hO.png" class="w-9 h-9" alt="Marketplace">
                <span class="font-medium text-[15px] text-[#050505]">Marketplace</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/5rR6LRpNc5u.png" class="w-9 h-9" alt="Watch">
                <span class="font-medium text-[15px] text-[#050505]">Watch</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/he-BkogidIc.png" class="w-9 h-9" alt="Memories">
                <span class="font-medium text-[15px] text-[#050505]">Memories</span>
            </a>
        </li>
        <li>
            <div class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                <div class="w-9 h-9 rounded-full bg-gray-300 flex items-center justify-center">
                    <svg viewBox="0 0 16 16" width="20" height="20" fill="currentColor" class="" aria-hidden="true" style="--color-primary: #050505;"><g fill-rule="evenodd" transform="translate(-448 -544)"><path fill-rule="nonzero" d="M452.707 549.293a1 1 0 0 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L456 552.586l-3.293-3.293z"></path></g></svg>
                </div>
                <span class="font-medium text-[15px] text-[#050505]">See more</span>
            </div>
        </li>
    </ul>
    
    <div class="border-t border-gray-300 my-4 mx-2"></div>
    
    <div class="px-2">
        <h3 class="text-gray-500 font-semibold text-[17px] mb-2">Your Shortcuts</h3>
        <ul class="space-y-1">
             <li>
                <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                    <img src="https://picsum.photos/40?random=1" class="w-9 h-9 rounded-lg object-cover" alt="Group 1">
                    <span class="font-medium text-[15px] text-[#050505]">Web Developers Group</span>
                </a>
            </li>
             <li>
                <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer">
                    <img src="https://picsum.photos/40?random=2" class="w-9 h-9 rounded-lg object-cover" alt="Group 2">
                    <span class="font-medium text-[15px] text-[#050505]">Laravel Enthusiasts</span>
                </a>
            </li>
        </ul>
    </div>
</div>
