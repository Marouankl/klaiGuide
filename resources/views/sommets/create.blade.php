@extends("layouts.app")

@section("content")
    <h1>Créer un abris</h1>

    <form method="POST" action="{{ route('sommets.store') }}" enctype="multipart/form-data" >

        <p>
            <label for="title" >Nom d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('nom_sommets') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("nom_sommets")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Type d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('altidue_sommets') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("altidue_sommets")
        <div>{{ $message }}</div>
        @enderror
        </p>


        <input type="submit" name="valider" value="Valider" >

    </form>


@endsection
