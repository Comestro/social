<div>
    @if($friendshipStatus === 'not_friends')
        <button wire:click="sendFriendRequest" class="w-full bg-[#e7f3ff] hover:bg-[#dbe7f2] text-[#1877f2] font-semibold px-4 py-2 rounded-md text-[15px] transition flex items-center justify-center gap-2 whitespace-nowrap">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" /></svg>
            Add Friend
        </button>
    @elseif($friendshipStatus === 'request_sent')
        <button wire:click="cancelFriendRequest" class="w-full bg-[#e4e6eb] hover:bg-[#d8dadf] text-black font-semibold px-4 py-2 rounded-md text-[15px] transition whitespace-nowrap">
            Cancel Request
        </button>
    @elseif($friendshipStatus === 'request_received')
        <div class="flex flex-col gap-2 w-full">
            <button wire:click="acceptFriendRequest" class="w-full bg-[#1877f2] hover:bg-[#166fe5] text-white font-semibold px-4 py-2 rounded-md text-[15px] transition whitespace-nowrap">
                Confirm
            </button>
            <button wire:click="rejectFriendRequest" class="w-full bg-[#e4e6eb] hover:bg-[#d8dadf] text-black font-semibold px-4 py-2 rounded-md text-[15px] transition whitespace-nowrap">
                Delete
            </button>   
        </div>
    @elseif($friendshipStatus === 'friends')
        <button wire:click="unfriend" class="w-full bg-[#e4e6eb] hover:bg-[#d8dadf] text-black font-semibold px-4 py-2 rounded-md text-[15px] transition flex items-center justify-center gap-2 whitespace-nowrap">
            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>
            Friends
        </button>
    @endif
</div>
