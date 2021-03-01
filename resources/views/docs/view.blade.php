@extends('theme.main')

@section('content')
    <div class="container">
        <div class="flex">
            <ol class="mr-6">
                @foreach($menu as $item)
                    <li class="mb-3">
                        <a href="{{ $item['route'] }}"
                           class="px-3 py-2 w-full block whitespace-nowrap rounded{{ $item['active'] ? ' bg-flamingo-800 text-white' : '' }}">
                            {{ __('docs.menu.'.$item['name']) }}
                        </a>
                    </li>
                @endforeach
            </ol>

            <section class="docs">
                @include($docView)
            </section>
        </div>
    </div>
@endsection
