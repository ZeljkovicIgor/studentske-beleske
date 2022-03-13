<x-index :title="$course->course_name">
    @if (!$course->notes->isempty())
        <h2 class="text-3xl font-bold text-center mt-10 underline">{{ $course->course_name }}</h2>
    @endif

    <x-empty-page :list="$course->notes" text="Predmet {{ $course->course_name }} je prazan.">
        <x-icons.note />
    </x-empty-page>

    <x-add-button element-path="/notes/{{ $course->id }}/create" />

    <div x-data="modalDialog">
        <x-notes :notes="$course->notes" />

        <x-modal-dialog modal-btn-text="Obrisi">
            <x-slot:heading>Obrisite belesku?</x-slot:heading>

            Da li ste sigurni da zelite da obrisete belesku <span class="font-semibold" x-text="elementTitle"></span>?
        </x-modal-dialog>
    </div>
</x-index>
