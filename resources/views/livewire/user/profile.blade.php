<div class="max-w-7xl mx-auto px-4 lg:px-8 py-8">
    <!-- Profile Header (Student ID Style) -->
    <div class="bg-white rounded-3xl shadow-lg border border-slate-200 overflow-hidden mb-8 relative">
        <!-- Cover Pattern -->
        <div class="h-48 bg-gradient-to-r from-indigo-600 to-purple-600 relative overflow-hidden">
            <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
            
            @if ($selectedUser->id == auth()->user()->id)
            <div class="absolute top-4 right-4">
                <form wire:submit.prevent="updateProfile" method="post" enctype="multipart/form-data">
                    <input type="file" class="hidden" wire:model="cover" id="uploadCover">
                    <label for="uploadCover" class="bg-white/20 hover:bg-white/30 backdrop-blur-md text-white px-4 py-2 rounded-xl text-sm font-semibold cursor-pointer transition flex items-center gap-2 border border-white/30">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" /></svg>
                        <span>Change Cover</span>
                    </label>
                    <button type="submit" class="hidden"></button>
                </form>
            </div>
            @endif
        </div>

        <div class="px-8 pb-8">
            <div class="flex flex-col md:flex-row items-start md:items-end -mt-16 gap-6">
                <!-- Profile Picture -->
                <div class="relative group">
                    <div class="w-32 h-32 md:w-40 md:h-40 rounded-2xl border-4 border-white bg-white shadow-md overflow-hidden">
                        <img src="@if ($selectedUser->dp) {{ asset('storage/images/dp/' . $selectedUser->dp) }} @else {{ asset('images/dp.png') }} @endif" class="w-full h-full object-cover">
                    </div>
                    @if ($selectedUser->id == auth()->user()->id)
                    <div class="absolute inset-0 bg-black/40 rounded-2xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                        <form wire:submit.prevent="updateProfile" method="post" enctype="multipart/form-data">
                            <input type="file" class="hidden" wire:model="dp" id="uploadDp">
                            <label for="uploadDp" class="cursor-pointer text-white">
                                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" /></svg>
                            </label>
                            <button type="submit" class="hidden"></button>
                        </form>
                    </div>
                    @endif
                </div>

                <!-- User Info -->
                <div class="flex-1 pt-4 md:pt-0">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h1 class="text-3xl font-bold text-slate-900">{{ $selectedUser->fname }} {{ $selectedUser->lname }}</h1>
                            <div class="flex items-center gap-2 text-slate-500 mt-1 font-medium">
                                <span class="bg-indigo-100 text-indigo-700 px-2 py-0.5 rounded text-sm">Computer Science</span>
                                <span>•</span>
                                <span>Class of 2025</span>
                            </div>
                        </div>
                        
                        <div class="flex gap-3">
                            @if ($selectedUser->id == auth()->user()->id)
                                <button class="bg-white border border-slate-300 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-xl font-semibold shadow-sm transition flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                                    Edit Profile
                                </button>
                            @else
                                <livewire:user.friendship-button :selectedUser="$selectedUser" />
                                <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-xl font-semibold shadow-md shadow-indigo-200 transition flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" /></svg>
                                    Message
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="px-8 border-t border-slate-100 bg-slate-50/50">
            <nav class="flex gap-8">
                <a href="#" class="py-4 border-b-2 border-indigo-600 text-indigo-600 font-semibold text-sm">Portfolio</a>
                <a href="#" class="py-4 border-b-2 border-transparent text-slate-500 hover:text-slate-800 font-medium text-sm transition">Schedule</a>
                <a href="#" class="py-4 border-b-2 border-transparent text-slate-500 hover:text-slate-800 font-medium text-sm transition">Classmates</a>
                <a href="#" class="py-4 border-b-2 border-transparent text-slate-500 hover:text-slate-800 font-medium text-sm transition">Projects</a>
            </nav>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column: Info & Portfolio -->
        <div class="space-y-6">
            <!-- About Card -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                <h3 class="font-bold text-slate-800 mb-4 text-lg">About Me</h3>
                <p class="text-slate-600 leading-relaxed mb-6">{{ $selectedUser->bio ?? 'Student at University. Passionate about technology and design.' }}</p>
                
                <div class="space-y-3">
                    <div class="flex items-center gap-3 text-slate-600">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                        </div>
                        <span class="text-sm">Lives in <span class="font-semibold text-slate-800">New York, USA</span></span>
                    </div>
                    <div class="flex items-center gap-3 text-slate-600">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-500">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <span class="text-sm">Joined <span class="font-semibold text-slate-800">{{ $selectedUser->created_at->format('F Y') }}</span></span>
                    </div>
                </div>
            </div>

            <!-- Skills/Interests (Placeholder) -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                <h3 class="font-bold text-slate-800 mb-4 text-lg">Skills</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium">UI Design</span>
                    <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium">Laravel</span>
                    <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium">React</span>
                    <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-lg text-sm font-medium">Photography</span>
                </div>
            </div>
        </div>

        <!-- Right Column: Feed -->
        <div class="lg:col-span-2 space-y-6">
            @if ($selectedUser->id == auth()->user()->id)
                <livewire:user.post.create-form />
            @endif

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-4 flex items-center justify-between">
                <h3 class="font-bold text-slate-800">Activity</h3>
                <select class="bg-slate-50 border-none text-sm font-medium text-slate-600 rounded-lg py-1.5 pl-3 pr-8 focus:ring-0 cursor-pointer">
                    <option>Recent Posts</option>
                    <option>Popular</option>
                </select>
            </div>

            @livewire('user.post.calling-post', ['selectedUser' => $selectedUser])
        </div>
    </div>
</div>
