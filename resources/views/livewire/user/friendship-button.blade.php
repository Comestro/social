    <div>
    @if($friendshipStatus === 'not_friends')
        <button wire:click="sendFriendRequest" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add Friend
        </button>
    @elseif($friendshipStatus === 'request_sent')
        <button wire:click="cancelFriendRequest" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            Cancel Request
        </button>
    @elseif($friendshipStatus === 'request_received')
        <div class="flex space-x-2">
            <button wire:click="acceptFriendRequest" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Accept
            </button>
            <button wire:click="rejectFriendRequest" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                Reject
            </button>   
        </div>
    @elseif($friendshipStatus === 'friends')
        <button wire:click="unfriend" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Unfriend
        </button>
    @endif
</div>
