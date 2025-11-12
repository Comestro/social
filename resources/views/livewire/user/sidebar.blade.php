<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

    <div class="flex flex-col">
        <div class="p-4 bg-white rounded shadow mb-4">
            <h2 class="text-lg font-bold mb-2">Sidebar</h2>
            <ul>
                <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">Link 1</a></li>
                <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">Link 2</a></li>
                <li class="mb-2"><a href="#" class="text-blue-500 hover:underline">Link 3</a></li>
            </ul>
        </div>
        <div class="p-4 bg-white rounded shadow">
            <h2 class="text-lg font-bold mb-2">Profile Summary</h2>
            <p class="text-gray-700">Welcome, {{ auth()->user()->fname }}!</p>
        </div>
    </div>
</div>
