<div class="min-h-screen flex flex-col items-center justify-center bg-[#f0f2f5] py-10">
    <div class="mb-4">
        <h1 class="text-blue-600 text-5xl font-bold tracking-tighter">facebook</h1>
    </div>
    
    <div class="bg-white p-4 rounded-lg shadow-lg w-full max-w-[432px]">
        <div class="border-b border-gray-300 pb-4 mb-4">
            <h2 class="text-[25px] font-bold text-[#1c1e21] leading-8">Create a new account</h2>
            <p class="text-[15px] text-[#606770]">It's quick and easy.</p>
        </div>

        <form wire:submit.prevent="register">
            <div class="grid grid-cols-2 gap-3 mb-3">
                <div>
                    <input type="text" wire:model="fname" placeholder="First name" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-[#f5f6f7] focus:outline-none focus:border-gray-400 text-[15px]">
                    @error('fname') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="text" wire:model="lname" placeholder="Surname" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-[#f5f6f7] focus:outline-none focus:border-gray-400 text-[15px]">
                    @error('lname') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="mb-3">
                <input type="email" wire:model="email" placeholder="Mobile number or email address" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-[#f5f6f7] focus:outline-none focus:border-gray-400 text-[15px]">
                @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <input type="password" wire:model="password" placeholder="New password" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-[#f5f6f7] focus:outline-none focus:border-gray-400 text-[15px]">
                @error('password') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="text-xs text-[#606770] font-semibold block mb-1">Date of birth</label>
                <input type="date" wire:model="dob" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-[#f5f6f7] focus:outline-none focus:border-gray-400 text-[15px]">
                @error('dob') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label class="text-xs text-[#606770] font-semibold block mb-1">Gender</label>
                <div class="grid grid-cols-3 gap-2">
                    <label class="border border-gray-300 rounded-md p-2 flex items-center justify-between cursor-pointer hover:bg-gray-100">
                        <span class="text-[15px] text-[#1c1e21]">Female</span>
                        <input type="radio" wire:model="gender" value="female" class="focus:ring-0">
                    </label>
                    <label class="border border-gray-300 rounded-md p-2 flex items-center justify-between cursor-pointer hover:bg-gray-100">
                        <span class="text-[15px] text-[#1c1e21]">Male</span>
                        <input type="radio" wire:model="gender" value="male" class="focus:ring-0">
                    </label>
                    <label class="border border-gray-300 rounded-md p-2 flex items-center justify-between cursor-pointer hover:bg-gray-100">
                        <span class="text-[15px] text-[#1c1e21]">Custom</span>
                        <input type="radio" wire:model="gender" value="other" class="focus:ring-0">
                    </label>
                </div>
                @error('gender') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                 <input type="text" wire:model="phone" placeholder="Phone (Optional)" class="w-full px-3 py-2 border border-gray-300 rounded-md bg-[#f5f6f7] focus:outline-none focus:border-gray-400 text-[15px]">
                 @error('phone') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <p class="text-[11px] text-[#777] mb-4">
                People who use our service may have uploaded your contact information to Facebook. <a href="#" class="text-[#385898] hover:underline">Learn more</a>.
                <br><br>
                By clicking Sign Up, you agree to our <a href="#" class="text-[#385898] hover:underline">Terms</a>, <a href="#" class="text-[#385898] hover:underline">Privacy Policy</a> and <a href="#" class="text-[#385898] hover:underline">Cookies Policy</a>.
            </p>

            <div class="text-center">
                <button type="submit" class="bg-[#00a400] hover:bg-[#008f00] text-white font-bold text-[18px] px-16 py-1.5 rounded-md transition duration-200 shadow-sm">Sign Up</button>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-[#1877f2] text-[15px] hover:underline">Already have an account?</a>
            </div>
        </form>
    </div>
</div>
