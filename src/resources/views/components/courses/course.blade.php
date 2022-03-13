<div x-data="{ options: false }"
    class="p-4 text-center flex flex-col justify-between bg-white hover:bg-mintcream border border-nyanza w-96 rounded-[16px] shadow-lg relative">
    <a class="block" href="/courses/{{ $course->id }}">
        <div class="fill-white stroke-blackpurple px-12">
            <x-icons.course />
        </div>
        <p class="text-xl font-medium m-2">{{ $course->course_name }}</p>
    </a>

    <div @click="options = true" class="absolute top-6 right-4 w-8">
        <x-icons.options />
    </div>

    <div x-cloak x-show="options" x-transition @click.outside="options = false"
        class="flex flex-col z-50 absolute top-10 right-10 border border-nyanza bg-white rounded-lg font-semibold text-base">
        <a class="p-2 hover:bg-nyanza rounded-t-lg" href="/courses/{{ $course->id }}/edit">
            Izmeni
        </a>
        <button class="p-2 hover:bg-nyanza rounded-b-lg"
                @click="modalBtn('/courses/{{ $course->id }}/delete', '{{ $course->course_name }}')">
            Obrisi
        </button>
    </div>
</div>
