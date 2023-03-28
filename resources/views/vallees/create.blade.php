@extends("layouts.app")

@section("content")
    <h1>Créer un vallees</h1>

    <form method="POST" action="{{ route('vallees.store') }}" enctype="multipart/form-data" >

        <p>
            <label for="title" >Nom d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('nom_Vallees') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("nom_Vallees")
        <div>{{ $message }}</div>
        @enderror

        <input type="submit" name="valider" value="Valider" >

    </form>


@endsection
