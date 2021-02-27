<div class="bg-white rounded-xl px-6 py-4 shadow-lg" data-aos="fade-up" data-aos-delay="{{ $fadeDelay ?? 0 }}">
    <div class="flex items-center h-full">
        <i class="{{ $icon }} text-5xl text-flamingo-800 mr-6"></i>
        <div>
            <h2 class="font-extrabold text-3xl mb-2">
                {!! __('home.teaser.'.$translationKey.'.title') !!}
            </h2>
            <p>{!! __('home.teaser.'.$translationKey.'.text') !!}</p>
        </div>
    </div>
</div>
