@extends("layouts.app")

@section("content")
    <h1>Créer un abris</h1>

    <form method="POST" action="{{ route('abris.store') }}" enctype="multipart/form-data" >

        <p>
            <label for="title" >Nom d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('nom_Abris') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("nom_Abris")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Type d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('type_Abris') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("type_Abris")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Altitude d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('altitude_Abris') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("altitude_Abris")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Places d'un abris</label><br/>
            <input type="text" name="title" value="{{ old('places_Abris') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("places_Abris")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Prix par nuit</label><br/>
            <input type="text" name="title" value="{{ old('prixNuit_Abris') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("prixNuit_Abris")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Prix par repas</label><br/>
            <input type="text" name="title" value="{{ old('prixRepas_Abris') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("prixRepas_Abris")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Téléphonde de gardien</label><br/>
            <input type="text" name="title" value="{{ old('telGardien_Abris') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("telGardien_Abris")
        <div>{{ $message }}</div>
        @enderror
        </p>

        <input type="submit" name="valider" value="Valider" >

    </form>


@endsection
