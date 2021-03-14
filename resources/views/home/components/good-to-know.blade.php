<section class="my-16 py-14">
    <div class="container">
        <div class="flex flex-column items-center">
            <div>
                <h2 class="text-3xl tracking-tight font-bold text-flamingo-800 sm:text-4xl md:text-5xl mb-5"
                    data-aos="fade" id="examples">
                    {!! __('home.good-to-know.title') !!}
                </h2>
                <p data-aos="fade" data-aos-delay="700" class="mb-4">{!! __('home.good-to-know.description') !!}</p>
                <div class="grid gap-6 grid-cols-1 lg:grid-cols-2">
                    @foreach(__('home.good-to-know.blocks') as $block)
                        <div class="bg-white rounded-xl px-6 py-4 shadow-lg my-2"
                             data-aos="fade-up" data-aos-delay="750">
                            <div class="flex items-center h-full">
                                <i class="text-6xl text-flamingo-800 mr-6">
                                    <i class="{{ $block['icon'] }}"></i>
                                </i>
                                <div>
                                    <h3 class="font-extrabold text-3xl mb-3">
                                        {!! $block['title'] !!}
                                    </h3>
                                    <p class="mb-2">{!! $block['text'] !!}</p>
                                    @foreach($block['links'] as $link)
                                        <a href="{{ $link['url'] }}" class="text-gray-500 mb-2 mr-3" target="_blank">
                                            {{ $link['text'] }} <i class="fas fa-external-link-alt text-sm inline-block ml-1"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
