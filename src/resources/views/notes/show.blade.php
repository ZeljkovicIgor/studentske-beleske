<x-index :title="$note->title" back-btn-path="/courses/{{ $note->course_id }}">
    <div class="flex justify-center">
        <div class="flex flex-col w-1/2 my-4 px-8 py-6 text-left bg-white border rounded-[16px] shadow-lg">
            <h3 class="text-center text-2xl font-bold">{{ $note->title }}</h3>
            <form x-data="quillField" @submit="quillSubmit($refs)" action="/notes/{{ $note->id }}/edit" method="post" accept-charset="utf-8">
                @method('PUT')
                @csrf
                <div class="mt-6 flex min-h-[48rem] justify-between flex-col gap-6">
                    <div class="flex justify-between gap-10">
                        <div class="w-full">
                            <label class="font-bold" for="title">Naslov</label>
                            <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md" name="title" id="title"
                                value="{{ $note->title }}">
                        </div>
                        <div class="w-full">
                            <label class="font-bold" for="note_date">Datum nastave</label>
                            <x-date-picker :existing-date="$note->course_date" name="course_date" />
                        </div>
                    </div>
                    <div class="bg-honeydew" id="editorHolder" hidden>
                        <div class="bg-white !h-[35rem]" id="editor">{!! $note->content !!}</div>
                        <input type="hidden" x-ref="contentField" name="content">
                    </div>
                    <div class="flex justify-center">
                        <input type="submit"
                            class="px-6 py-2 text-mintcream rounded-lg bg-seagreen hover:bg-forest cursor-pointer"
                            value="Sacuvaj">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <x-quill-scripts />

</x-index>
