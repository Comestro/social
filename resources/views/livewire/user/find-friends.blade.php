<div class="flex space-y-4 ">

    <div class="w-3/12 mt-10">
    
    </div>
    
    {{-- calling users --}}
    <div class="flex space-y-3 flex-col w-6/12 ">
        @foreach($users as $user)
            <div class="flex items-center space-x-3 p-2 hover:bg-gray-100 rounded-lg">
                <div class="w-10 h-10 rounded-full overflow-hidden">
                    <img src="@if ($user->dp) {{ asset('storage/images/dp/' . $user->dp) }} @else {{ asset('images/dp.png') }} @endif"
                        alt="{{ $user->name }}'s Profile Image" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <a href="{{ route('profile', ['id' => $user->id]) }}" class="font-medium text-gray-800 hover:underline">
                        {{ $user->fname }} {{ $user->lname }}
                    </a>
                </div>
                <div>
                    @if($user->id != auth()->user()->id)
                        <livewire:user.friendship-button :selectedUser="$user" :key="$user->id" />
                    @endif
                </div>  
            </div>
    @endforeach
        </div>    

</div>
