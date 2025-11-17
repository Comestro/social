<div class="min-h-screen flex items-center justify-center bg-gray-100">
    {{-- Stop trying to control. --}}
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1><img src="{{ asset('images/login.png') }}" alt="Logo" class="mx-auto mb-4 w-24 h-24">Social</h1>
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form wire:submit.prevent="login">
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border rounded">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" wire:model="password" class="w-full px-3 py-2 border rounded">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
        </form>
        <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Don't have an account? Register</a>
    </div>
</div>
