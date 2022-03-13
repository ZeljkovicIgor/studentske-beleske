<!DOCTYPE html>
<html class="text-blackpurple bg-mintcream">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @isset($links)
        {{ $links }}
    @endisset

    <title>{{ $title }} - Studentske Beleske</title>
</head>

<body>
    @if (Auth::check())
        <nav x-data="{ open: false }" class="p-6 flex justify-between">
            <div class="w-full {{ $isAtHome() ? 'hidden' : '' }}">
                <a href="{{ $backBtnPath }}" class="px-6 py-2 -my-2 rounded-lg font-bold text-mintcream bg-seagreen hover:bg-forest">&#8592; Nazad</a>
            </div>
            <div class="flex justify-end w-full">
                <button class="text-md font-semibold" @click="open = ! open">
                    {{ Auth::user()->username }}
                    <span>&#9660;</span>
                </button>
                <div x-cloak x-show="open" @click.outside="open = false"
                    class="flex flex-col z-50 absolute mt-8 shadow-lg bg-white border border-nyanza rounded-lg font-semibold text-base">
                    <a class="p-2 hover:bg-nyanza rounded-t-lg" href="/user-profile">Profil</a>
                    <a class="p-2 hover:bg-nyanza rounded-b-lg" href="/logout">Odjavi se</a>
                </div>
            </div>
        </nav>
    @endif

    {{ $slot }}
</body>

<script defer src="{{ asset('js/app.js') }}"></script>

@isset($scripts)
    {{ $scripts }}
@endisset

</html>
