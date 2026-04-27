<nav class="bg-white/80 backdrop-blur-md shadow-sm border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-6 py-3 flex items-center justify-between">

        <h1 class="text-lg md:text-xl font-bold text-blue-700">
            Welcome {{auth()->user()->name}}
        </h1>

        <div class="hidden md:flex items-center gap-6 text-sm">
            <a href="/Dashboard" class="text-gray-600 hover:text-blue-600">Dashboard</a>
            <a href="/profile" class="text-gray-600 hover:text-blue-600">Profile</a>  
            <a href="/kids" class="text-gray-600 hover:text-blue-600">Add Kids</a>    
        </div>

        <div class="flex items-center gap-3">

            <button id="menuBtn" class="md:hidden text-gray-600">
                ☰
            </button>

            <form action="/logout" method="POST" class="hidden md:block">
                @csrf
                <button type="submit" class="px-4 py-1.5 bg-blue-600 text-white rounded-lg">
                    Logout
                </button>
            </form>
        </div>

    </div>

    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4 space-y-3">

        <a href="/Dashboard" class="block text-gray-600 hover:text-blue-600">Dashboard</a>
        <a href="/profile" class="block text-gray-600 hover:text-blue-600">Profile</a>
        <a href="/kids" class="block text-gray-600 hover:text-blue-600">Add Kids</a>

        <form action="/logout" method="POST">
            @csrf
            <button class="w-full text-left px-4 py-2 bg-blue-600 text-white rounded-lg">
                Logout
            </button>
        </form>

    </div>
</nav>

<script>
    const btn = document.getElementById('menuBtn');
    const menu = document.getElementById('mobileMenu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>