<section class="bg-white my-16 py-14">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-7">
            <div>
                <img src="{{ asset('images/frontpage/how-to-overlay.svg') }}">
            </div>
            <div class="flex flex-column items-center">
                <div>
                    <h2 class="text-3xl tracking-tight font-bold text-flamingo-800 sm:text-4xl md:text-5xl mb-5"
                        data-aos="fade">
                        {!! __('home.how-to.overlay.title') !!}
                    </h2>
                    <p data-aos="fade" data-aos-delay="700">{!! __('home.how-to.overlay.description') !!}</p>
                    <h3 class="font-bold mt-4 mb-2 text-gray-500">{!! __('home.how-to.overlay.events.title') !!}</h3>
                    <p>
                        @foreach( __('home.how-to.overlay.events.items') as $event)
                            <span
                                class="inline-flex items-center justify-center text-sm px-3 py-2 mr-2 mt-2 leading-none text-white bg-gray-500 rounded-full">
                            {{ $event }}
                            </span>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
