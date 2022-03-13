@if ($list->isEmpty())
    <div class="absolute top-0 left-0 min-h-screen w-full flex flex-col justify-center items-center -z-10">
        <div class="w-20 flex justify-center fill-teagreen">
            {{ $slot }}
        </div>
        <div class="text-2xl text-teagreen">
            {{ $text }}
        </div>
    </div>
@endif
