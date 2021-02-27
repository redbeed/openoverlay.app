@extends('theme.main')

@section('content')
    @include('home.components.header')

    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mt-7">
            <x-frontpage-teaser translation-key="overlay"></x-frontpage-teaser>

            <x-frontpage-teaser translation-key="bot"></x-frontpage-teaser>

            <x-frontpage-teaser translation-key="endless"></x-frontpage-teaser>


        </div>
    </div>
@endsection
