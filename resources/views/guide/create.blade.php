@extends("layouts.app")

@section("content")
    <h1>Créer un abris</h1>

    <form method="POST" action="{{ route('guides.store') }}" enctype="multipart/form-data" >

        <p>
            <label for="title" >Nom d'un guide</label><br/>
            <input type="text" name="title" value="{{ old('nom_Guides') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("nom_Guides")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >Pernom duide</label><br/>
            <input type="text" name="title" value="{{ old('pernom_Guides') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("pernom_Guides")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >email : </label><br/>
            <input type="text" name="title" value="{{ old('email_Guides') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("email_Guides")
        <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="title" >mot de passe: </label><br/>
            <input type="text" name="title" value="{{ old('motdepasse_Guides') }}"  id="title" placeholder="Le titre du post" >

            <!-- Le message d'erreur pour "title" -->
        @error("motdepasse_Guides")
        <div>{{ $message }}</div>
        @enderror
        </p>


        <input type="submit" name="valider" value="Valider" >

    </form>


@endsection
