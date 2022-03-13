<x-index title="Registracija">
    <div class="flex items-center justify-center min-h-screen bg-honeydew">
        <div class="px-8 py-6 mt-4 text-left bg-mintcream shadow-lg rounded-lg">
            <h3 class="text-2xl font-bold text-center">Registracija</h3>
            <form action="/register" method="post">
                @csrf
                <div class="mt-4">
                    <div>
                        <label class="block">Korisnicko Ime</label>
                        <input type="text" name="username" class="w-full px-4 py-2 mt-2 border rounded-md"
                            placeholder="Unesite Korisnicko Ime" />
                        <div class="text-red-600">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block">Lozinka</label>
                        <input type="password" name="password" class="w-full px-4 py-2 mt-2 border rounded-md"
                            placeholder="Unesite Lozinku" />
                        <div class="text-red-600">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block">Ponovite Lozinku</label>
                        <input type="password" name="password_confirmation" class="w-full px-4 py-2 mt-2 border rounded-md"
                            placeholder="Ponovite Lozinku" />
                    </div>
                    <div class="flex items-baseline justify-between">
                        <input type="submit" value="Registrujte se"
                            class="px-6 py-2 mt-4 text-white bg-seagreen rounded-lg hover:bg-forest cursor-pointer" />
                        <a href="/login" class="text-sm text-forest hover:underline">Prijava</a>
                    </div>
                    <div class="text-red-600 mt-4">
                        @error('errors')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-index>
