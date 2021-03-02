@extends('theme.main')

@section('title', $metaTitle)

@section('content')
    <div class="container">
        <div class="flex">
            <div class="mr-6 md:mr-14">
                @foreach($menu as $groupKey => $group)
                    <section class="menu-install mb-6">
                        <h2 class="text-sm text-gray-500 font-bold mb-2">{{ __('docs.menu.'.$groupKey.'.title') }}</h2>

                        <ol class="md:pl-3">
                            @foreach($group as $item)
                                <li class="mb-1">
                                    <a href="{{ $item['route'] }}"
                                       class="px-3 py-2 w-full block whitespace-nowrap rounded{{ $item['active'] ? ' bg-flamingo-800 text-white' : '' }}">
                                        {{ $item['translation'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ol>
                    </section>
                @endforeach
            </div>

            <section class="docs">
                @include($docView)
            </section>
        </div>
    </div>
@endsection
