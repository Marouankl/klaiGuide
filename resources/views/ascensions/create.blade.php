@extends("layouts.app")

@section("content")
    <h1>Créer un abris</h1>

    <form method="POST" action="{{ route('ascensions.store') }}" enctype="multipart/form-data" >

        <p>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="{{ old('code_Abris') }}">Abris</option>
                <option value="{{ old('code_sommets') }}">Sommets</option>

            </select>

        </p>
        <p>
            <label for="title" >defficulte Ascension</label><br/>
            <input type="text" name="title" value="{{ old('defficulte_Ascension') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("defficulte_Ascension")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Altitude d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('duree_Ascension') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("duree_Ascension")
        <div>{{ $message }}</div>
        @enderror
        </p>


        <input type="submit" name="valider" value="Valider" >

    </form>


@endsection
