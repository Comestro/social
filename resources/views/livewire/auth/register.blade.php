<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1><img src="{{asset('images/login.png')}}" alt="Logo" class="mx-auto mb-4 w-24 h-24">Social</h1>
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        <form wire:submit.prevent="register">
            <div class="grid grid-cols-2 gap-3">
                <div class="mb-4">
                <label for="fname" class="block text-gray-700">First Name</label>
                <input type="text" id="fname" wire:model="fname" class="w-full px-3 py-2 border rounded">
                @error('fname') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="lname" class="block text-gray-700">Last Name</label>
                <input type="text" id="lname" wire:model="lname" class="w-full px-3 py-2 border rounded">
                @error('lname') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            </div>
            <div class="mb-4">
                <label for="dob" class="block text-gray-700">Date of Birth</label>
                <input type="date" id="dob" wire:model="dob" class="w-full px-3 py-2 border rounded">
                @error('dob') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-gray-700">Gender</label>
                <select id="gender" wire:model="gender" class="w-full px-3 py-2 border rounded">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                @error('gender') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border rounded">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Phone</label>
                <input type="text" id="phone" wire:model="phone" class="w-full px-3 py-2 border rounded" >
                @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" wire:model="password" class="w-full px-3 py-2 border rounded" >
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
          
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Register</button>
        </form>
    </div>
</div>
