<div class="container mx-auto p-8">
    @foreach ($notes as $note)
        <x-notes.note :note="$note" />
    @endforeach
</div>
