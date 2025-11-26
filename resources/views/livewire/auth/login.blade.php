<div class="min-h-screen flex flex-col md:flex-row items-center justify-center bg-[#f0f2f5] px-4 md:px-0">
    <div class="w-full max-w-[980px] flex flex-col md:flex-row items-center justify-between gap-8 md:gap-16">
        <!-- Left Side: Branding -->
        <div class="text-center md:text-left md:w-1/2 -mt-8 md:-mt-20">
            <h1 class="text-blue-600 text-6xl font-bold tracking-tighter mb-2">facebook</h1>
            <p class="text-[24px] leading-8 text-[#1c1e21]">Connect with friends and the world around you on Facebook.</p>
        </div>

        <!-- Right Side: Login Form -->
        <div class="bg-white p-4 rounded-lg shadow-lg w-full max-w-[396px]">
            <form wire:submit.prevent="login" class="flex flex-col gap-4">
                <div>
                    <input type="email" wire:model="email" placeholder="Email or Phone Number" class="w-full px-4 py-3.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 text-[17px]">
                    @error('email') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                </div>
                <div>
                    <input type="password" wire:model="password" placeholder="Password" class="w-full px-4 py-3.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 text-[17px]">
                    @error('password') <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span> @enderror
                </div>
                
                <button type="submit" class="w-full bg-[#1877f2] hover:bg-[#166fe5] text-white font-bold text-[20px] py-2.5 rounded-md transition duration-200">Log In</button>
                
                <div class="text-center border-b border-gray-300 pb-4">
                    <a href="#" class="text-[#1877f2] text-[14px] hover:underline">Forgot password?</a>
                </div>

                <div class="text-center pt-2">
                    <a href="{{ route('register') }}" class="inline-block bg-[#42b72a] hover:bg-[#36a420] text-white font-bold text-[17px] px-4 py-3 rounded-md transition duration-200">Create new account</a>
                </div>
            </form>
        </div>
    </div>
</div>
