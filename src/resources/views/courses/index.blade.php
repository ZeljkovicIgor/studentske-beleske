<x-index title="Predmeti">
    <x-empty-page :list="$courses" text="Lista predmeta je prazna.">
        <x-icons.course />
    </x-empty-page>

    <x-add-button element-path="/courses/create" />

    <div x-data="modalDialog">
        <x-courses :courses="$courses" />

        <x-modal-dialog modal-btn-text="Obrisi">
            <x-slot:heading>Obrisite predmet?</x-slot:heading>

            Da li ste sigurni da zelite da obrisete predmet <span class="font-semibold" x-text="elementTitle"></span>?
        </x-modal-dialog>
    </div>
</x-index>
