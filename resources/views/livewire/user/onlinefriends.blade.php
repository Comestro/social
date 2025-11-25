 <div>
        <h2 class="text-sm text-slate-500 font-semibold mb-4">Online Friends</h2>
        <ul>
            @foreach($friends as $friend)
                <li>
                    <a  class="mb-2 flex items-center hover:bg-gray-100 p-2 rounded cursor-pointer" href="{{ route('profile', ['id' => $friend->id]) }}">
                    <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                        <img src="@if ($friend->dp) {{ asset('storage/images/dp/' . $friend->dp) }} @else {{ asset('images/dp.png') }} @endif"
                            alt="{{ $friend->name }}'s Profile Image" class="w-full h-full object-cover">
                    </div>
                    <span class="font-medium">{{ $friend->fname }}</span>
                    <span class="ml-auto text-sm text-green-500 font-semibold">●</span>
                    </a>
                </li>
            @endforeach
        </ul>
</div>
