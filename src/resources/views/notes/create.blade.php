<x-index title="Nova Beleska" back-btn-path="/courses/{{ $course_id }}">
    <div class="flex justify-center">
        <div class="flex flex-col w-1/2 my-4 px-8 py-6 text-left bg-white border rounded-[16px] shadow-lg">
            <h3 class="text-center text-2xl font-bold">Nova beleska</h3>
            <form x-data="quillField" @submit="quillSubmit($refs)" action="/notes/store"
                method="post" accept-charset="utf-8">
                @csrf
                <input type="hidden" value="{{ $course_id }}" name="course_id" />
                <div class="pt-6 flex flex-col gap-6">
                    <div class="flex justify-between gap-10">
                        <div class="w-full">
                            <label class="font-bold" for="title">Naslov</label>
                            <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md" name="title" id="title"
                                value="">
                        </div>
                        <div class="w-full">
                            <label class="font-bold" for="note_date">Datum nastave</label>
                            <x-date-picker existing-date="" name="course_date" />
                        </div>
                    </div>
                    <div class="bg-honeydew" id="editorHolder" hidden>
                        <div class="bg-white !h-[35rem]" id="editor"></div>
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
