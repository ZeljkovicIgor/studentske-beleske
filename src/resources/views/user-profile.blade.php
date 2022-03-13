<x-index title="Profil korisnika">

    <div class="flex flex-col gap-4 mx-auto max-w-lg mt-20">
        <div class="px-8 py-6 bg-white border rounded-[16px] shadow-lg">
            <h3 class="text-2xl font-bold text-center">Promena korisnickog imena</h3>
            <form action="/user-profile/{{ $user->id }}" method="post" accept-charset="utf-8">
                @method('PUT')
                @csrf
                <div x-data="modalDialog" class="mt-6">
                    <div>
                        <label for="username" class="font-bold">Korisnicko ime</label>
                        <input type="text" value="{{ $user->username }}"
                            class="w-full px-4 py-2 mt-2 border rounded-md" name="username" id="username">
                    </div>
                    <div class="flex justify-center pt-4">
                        <button @click="modalBtn()"
                            class="px-6 py-2 text-white rounded-lg bg-seagreen hover:bg-forest">Sacuvajte</button>
                    </div>

                    <x-modal-dialog>
                        <x-slot:heading>Potvrdite lozinku</x-slot:heading>

                        <div class="mt-4">
                            <label for="change_username_confirm" class="block">
                                Unesite lozinku kako biste potvrdili izmenu korisnickog imena:
                            </label>
                            <input type="password" name="change_username_confirm" placeholder="Unesite lozinku" value=""
                                class="w-full px-4 py-2 mt-2 border rounded-md" required>

                            <x-slot:submit>
                                <input type="submit" value="Potvrdite"
                                    class="px-6 py-2 text-white bg-seagreen rounded-full hover:bg-forest cursor-pointer" />
                            </x-slot:submit>
                        </div>
                    </x-modal-dialog>
                </div>
            </form>
            <hr class="my-4 border-pink-200">
            <h3 class="text-2xl font-bold text-center">Promena lozinke</h3>
            <form action="/user-profile/{{ $user->id }}/change-password" method="post" accept-charset="utf-8">
                @method('PUT')
                @csrf
                <div class="mt-6">
                    <div class="mt-4">
                        <div class="mt-4">
                            <label class="block font-bold">Stara lozinka</label>
                            <input type="password" name="old_password" class="w-full px-4 py-2 mt-2 border rounded-md"
                                placeholder="Unesite staru lozinku" />
                            <div class="text-red-600">
                                @error('old_password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block font-bold">Nova lozinka</label>
                            <input type="password" name="new_password" class="w-full px-4 py-2 mt-2 border rounded-md"
                                placeholder="Unesite novu lozinku" />
                            <div class="text-red-600">
                                @error('new_password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block font-bold">Ponovite novu lozinku</label>
                            <input type="password" name="new_password_confirmation"
                                class="w-full px-4 py-2 mt-2 border rounded-md" placeholder="Ponovite novu lozinku" />
                        </div>
                        <div class="flex justify-center mt-4">
                            <input type="submit" value="Promenite"
                                class="px-6 py-2 text-white bg-seagreen rounded-lg hover:bg-forest cursor-pointer" />
                        </div>
                        <div class="text-red-600 mt-4">
                            @error('errors')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
            <hr class="my-4 border-pink-200">
            <h3 class="text-2xl font-bold text-center">Brisanje profila</h3>
            <div x-data="modalDialog" class="flex justify-center mt-6">
                <button @click="modalBtn()"
                    class="px-6 py-2 text-white rounded-lg bg-lilac hover:bg-milka">Obrisite profil</button>

                <form action="/user-profile/delete" method="post" accept-charset="utf-8">
                    @method('DELETE')
                    @csrf
                    <x-modal-dialog>
                        <x-slot:heading>Obrisite profil?</x-slot:heading>

                        <b>Da li ste sigurni da zelite da obrisete svoj profil?</b>

                        <div class="mt-4">
                            <label for="delete_password_confirm" class="block">
                                Unesite lozinku kako biste potvrdili brisanje naloga:
                            </label>
                            <input type="password" name="delete_password_confirm" placeholder="Unesite lozinku" value=""
                                class="w-full px-4 py-2 mt-2 border rounded-md" required>

                            <x-slot:submit>
                                <input type="submit" value="Obrisite"
                                    class="px-6 py-2 text-mintcream bg-red-500 rounded-full hover:bg-red-600 cursor-pointer" />
                            </x-slot:submit>
                        </div>
                    </x-modal-dialog>
                </form>
            </div>
        </div>
    </div>

</x-index>
