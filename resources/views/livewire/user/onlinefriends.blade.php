<div>
    <div class="flex items-center justify-between px-2 mb-2">
        <h3 class="text-gray-500 font-semibold text-[17px]">Contacts</h3>
        <div class="flex gap-2 text-gray-500">
            <svg class="w-5 h-5 cursor-pointer hover:bg-gray-200 rounded-full p-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <svg class="w-5 h-5 cursor-pointer hover:bg-gray-200 rounded-full p-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
        </div>
    </div>
    <ul class="space-y-1">
        @foreach($friends as $friend)
            <li>
                <a href="{{ route('profile', ['id' => $friend->id]) }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-200 transition cursor-pointer relative">
                    <div class="relative w-9 h-9">
                        <img src="@if ($friend->dp) {{ asset('storage/images/dp/' . $friend->dp) }} @else {{ asset('images/dp.png') }} @endif"
                             alt="{{ $friend->name }}" class="w-full h-full rounded-full object-cover border border-gray-200">
                        <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 border-2 border-white rounded-full"></div>
                    </div>
                    <span class="font-medium text-[15px] text-[#050505]">{{ $friend->fname }} {{ $friend->lname }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
