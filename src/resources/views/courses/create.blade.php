<x-index title="Novi predmet">
    <div class="flex justify-center mt-60">
        <div class="px-8 py-6 text-left bg-white border rounded-[16px] shadow-lg">
            <h3 class="text-center text-2xl font-bold">Novi predmet</h3>
            <form action="/courses/store" method="post" accept-charset="utf-8">
                @csrf
                <div class="mt-6">
                    <div>
                        <label class="block font-bold" for="course_name">Naziv predmeta:</label>
                        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md" name="course_name" id="course_name">
                    </div>
                    <div class="flex justify-center">
                        <input type="submit" class="px-6 py-2 mt-4 text-mintcream rounded-lg bg-seagreen hover:bg-forest cursor-pointer" value="Dodaj">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-index>
