<header class="shadow text-gray-200">
    <div class="container max-w-screen-lg mx-auto px-4 py-4 flex justify-between items-center relative">

        <div class="text-2xl font-bold text-blue-600 md:static absolute left-1/2 transform md:transform-none md:left-0 -translate-x-1/2 md:translate-x-0">
            Book Wise
        </div>

        <button id="menu-toggle" class="md:hidden text-gray-200 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <nav id="menu" class="ml-2 hidden md:flex items-center flex justify-end space-x-6 w-10/12">
    <div class="flex items-center justify-center space-x-6 w-10/12">
        <a href="/" class="<?=$view == 'index' ? '':'hover:'?>text-blue-600 font-medium">Explorar</a>
        <a href="/livros" class="<?=$view == 'livros' ? '':'hover:'?>text-blue-600 font-medium">Meus Livros</a>
    </div>
    <div class="ml-auto">
        <a href="/login" class="<?=$view == 'livros' ? '':'hover:'?>text-blue-600 font-medium">Login</a>
    </div>
</nav>

    </div>

    <div id="mobile-menu" class="md:hidden hidden flex-col space-y-4 px-4 pb-4">
        <a href="/" class="block hover:text-blue-600 font-medium">Explorar</a>
        <a href="/livros" class="block hover:text-blue-600 font-medium">Meus Livros</a>
        <a href="/login" class="block hover:text-blue-600 font-medium">Login</a>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</header>
