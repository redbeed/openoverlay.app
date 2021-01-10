<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative overflow-hidden mt-10">
    <div class="max-w-7xl mx-auto">
        <div class="md:flex">
            <main class="my-auto md:w-1/2 w-full px-4 sm:px-6 lg:px-8">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl md:text-5xl">
                        Self manage Twitch Overlay & Bot Management.
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        OpenOverlay is a Open-Source-Project based on Laravel.
                    </p>
                    <p class="mt-2 text-base text-gray-500 sm:text-lg sm:max-w-xl sm:mx-auto md:text-xl lg:mx-0">
                        The first developer friendly Overlay and Bot service for your twitch stream.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-xl shadow">
                            <a href="https://github.com/redbeed/openoverlay"
                               class="w-full flex items-center justify-center px-8 py-3 border-2 border-flamingo-800 text-base font-medium rounded-xl text-white bg-flamingo-800 hover:bg-white hover:text-flamingo-800 md:py-4 md:text-lg md:px-10">
                                Source Code
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="https://github.com/redbeed/OpenOverlay/blob/main/README.md"
                               class="w-full flex items-center justify-center px-8 py-3 border-2 border-flamingo-800 text-base font-medium rounded-xl text-flamingo-800 bg-white hover:bg-flamingo-800 hover:text-white md:py-4 md:text-lg md:px-10">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </main>
            <div class="relative w-full lg:inset-y-0 lg:right-0 lg:w-1/2">
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
