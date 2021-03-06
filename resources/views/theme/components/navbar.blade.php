<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-white md:bg-transparent py-2 md:py-5">
    <div class="container">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button id="navbar-toggle"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-flamingo-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <a class="flex-shrink-0 flex items-center" href="{{ route('home') }}">
                    <img class="block lg:hidden h-12 w-auto" src="{{ asset('images/logo/openoverlay-icon.svg') }}"
                         alt="OpenOverlay Icon">
                    <img class="hidden lg:block h-9 w-auto" src="{{ asset('images/logo/openoverlay-font.svg') }}"
                         alt="OpenOverlay Logo">
                </a>
            </div>
        </div>
    </div>
</nav>
