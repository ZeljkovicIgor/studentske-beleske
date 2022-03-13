<div x-data="{ options: false }" class="relative">
    <a href="/notes/{{ $note->id }}">
        <div class="flex items-center p-8 mt-4 bg-white hover:bg-mintcream rounded-[16px] border shadow-md">
            <span class="w-12 mr-2">
                <x-icons.note />
            </span>
            <h3 class="text-lg font-bold justify-self-start w-full">{{ $note->title }}</h3>
            <span class="text-lilac justify-self-center w-full">{{ $note->course_date->format('d-m-Y') }}</span>
        </div>
    </a>
    <span @click="options = true" class="absolute right-6 top-8 w-8">
        <x-icons.options />
    </span>
    <div x-cloak x-show="options" x-transition @click.outside="options = false"
        class="flex flex-col z-50 absolute top-10 right-10 border border-pink-300 bg-white rounded-lg font-semibold text-base">
        <a class="p-2 hover:bg-nyanza" href="/notes/{{ $note->id }}">
            Izmeni
        </a>
        <button class="p-2 hover:bg-nyanza"
            @click="modalBtn('/notes/{{ $note->id }}/delete', '{{ $note->title }}')">
            Obrisi
        </button>
    </div>
</div>
