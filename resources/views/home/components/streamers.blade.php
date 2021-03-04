<section class="bg-white my-16 py-14">
    <div class="container">
        <div class="flex flex-column items-center">
            <div>
                <h2 class="text-3xl tracking-tight font-bold text-flamingo-800 sm:text-4xl md:text-5xl mb-5"
                    data-aos="fade" id="examples">
                    {!! __('home.streamers.title') !!}
                </h2>
                <p data-aos="fade" data-aos-delay="700" class="mb-4">{!! __('home.streamers.description') !!}</p>
                <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-gray-100 px-4 py-4 flex my-2 rounded-lg px-2">
                        <div class="w-24 pr-5">
                            <a href="#" class="mb-4">
                                <img class="rounded" src="{{ asset('images/frontpage/streamer/movrs.jpg') }}">
                            </a>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-xl text-flamingo-800 mb-2">
                                <a href="https://www.twitch.tv/movrs" class="mb-4" target="_blank">
                                    moVRs <i class="fas fa-external-link-alt text-sm inline-block ml-1"></i>
                                </a>
                            </h3>
                            <p class="text-sm">VR Streamer who use OpenOverlay to make his stream interactive</p>
                        </div>
                    </div>
                    <div class="bg-gray-100 px-4 py-4 flex my-2 rounded-lg px-2">
                        <div class="w-24 pr-5">
                            <a href="https://www.twitch.tv/lethinium" class="mb-4" target="_blank">
                                <img class="rounded" src="{{ asset('images/frontpage/streamer/lethinium.jpg') }}">
                            </a>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-xl text-flamingo-800 mb-2">
                                <a href="https://www.twitch.tv/lethinium" class="mb-4" target="_blank">
                                    Lethinium <i class="fas fa-external-link-alt text-sm inline-block ml-1"></i>
                                </a>
                            </h3>
                            <p class="text-sm">Use the basics of OpenOverlay to delivery alerts and notifications.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
