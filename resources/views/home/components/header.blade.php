<div class="relative overflow-hidden mt-10">
    <div class="container">
        <div class="flex flex-col md:flex-row">
            <main class="my-auto md:w-1/2 w-full px-4 sm:px-6 lg:px-8 order-2 md:order-1">
                <div class="sm:text-center lg:text-left">
                    <div class="text-flamingo-800 font-bold text-xl mb-2">{{ __('home.header.subtitle') }}</div>
                    <h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl md:text-5xl mb-5">
                        {{ __('home.header.title') }}
                    </h1>
                    @foreach(__('home.header.description') as $text)
                        <p class="mt-1 text-base text-gray-500 sm:text-lg sm:max-w-xl sm:mx-auto  md:text-xl lg:mx-0">
                            {{ $text }}
                        </p>
                    @endforeach
                    <div class="grid grid-flow-col auto-cols-max gap-4 mt-7">
                        <a href="https://github.com/redbeed/openoverlay" class="btn-lg btn-flamingo">
                            <i class="fab fa-fw fa-github mr-1"></i> Source Code
                        </a>
                        <a href="https://discord.gg/PMjuRxbsBV" target="_blank" class="btn-lg btn-denim">
                            <i class="fab fa-fw fa-discord mr-1"></i> Discord
                        </a>
                    </div>
                </div>
            </main>
            <div class="relative w-full lg:inset-y-0 lg:right-0 lg:w-1/2 order-1 md:order-2">
                <img class="w-4/5 opacity-0 md:opacity-50 block ml-auto mr-0 mt-7"
                     src="{{asset('/images/logo/openoverlay-icon.svg')}}"
                     alt="openoverlay icon">
                <div class="bg-white rounded-xl px-6 py-4 absolute top-0 left-10 shadow-2xl min-w-72">
                    <div class="font-extrabold text-3xl">Lethinium</div>
                    <div class="text-flamingo-800">Redeemed <span class="font-extrabold">Highlight My Message</span>
                    </div>
                </div>

                <div class="bg-white rounded-xl px-6 py-4 absolute top-1/3 right-1 shadow-2xl">
                    <div class="flex pb-3">
                        <div class="ml-0 mr-auto text-gray-500 font-extrabold">Follower Goal</div>
                        <div class="ml-auto mr-0 text-flamingo-800 font-extrabold">55%</div>
                    </div>
                    <div class="bg-gray-300 h-12 w-72 rounded-xl overflow-hidden">
                        <div class="bg-flamingo-800 w-4/6 h-full"></div>
                    </div>
                </div>

                <div class="bg-white rounded-xl px-6 py-4 absolute bottom-10 left-0 shadow-2xl w-72">
                    <div class="text-flamingo-800">Latest Follower</div>
                    <div class="font-extrabold text-3xl">moVRs</div>
                </div>
            </div>
        </div>
    </div>
</div>
