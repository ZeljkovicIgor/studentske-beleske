<div x-cloak x-show="openModal" class="flex items-center justify-center fixed z-50 w-full h-full top-0 left-0">
    <div class="fixed w-full h-full bg-gray-500 opacity-50"></div>
    <div @click.outside="openModal = false" class="z-50 w-50 bg-white p-8 rounded-[16px]">
        <div class="flex justify-between">
            <h3 class="text-2xl font-bold">{{ $heading }}</h3>
            <button @click="openModal = false" class="fill-current text-blackpurple">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </button>
        </div>

        <div class="mt-8">
            {{ $slot }}
        </div>

        <div class="mt-10 flex justify-end gap-4">
            <button @click="openModal = false"
                class="bg-mintcream hover:bg-honeydew px-5 py-2 text-sm leading-5 rounded-full font-semibold">Odustani</button>

            @if (isset($submit))
                {{ $submit }}
            @else
                <a class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white"
                   x-bind:href="hrefModal">{{ $modalBtnText }}</a>
            @endif

        </div>
    </div>
</div>
