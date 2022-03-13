<x-index title="Pocetna">
    <a href="courses">Predmeti</a>
    <form action="logout" method="get" accept-charset="utf-8">
        @csrf
        <input type="submit" value="Odjavi se" name="logout" />
    </form>
</x-index>
