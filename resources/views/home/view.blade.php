@extends('theme.main')

@section('content')
    @include('home.components.header')

    <div class="container my-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            <x-frontpage-teaser translation-key="overlay" fade-delay="2000"></x-frontpage-teaser>

            <x-frontpage-teaser translation-key="bot" fade-delay="2200"></x-frontpage-teaser>

            <x-frontpage-teaser translation-key="endless" fade-delay="2400"></x-frontpage-teaser>
        </div>
    </div>

    @include('home.components.how-to.overlay')
    @include('home.components.how-to.bot')
    @include('home.components.streamers')
@endsection
