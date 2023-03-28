@extends("layouts.app")
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    @if (isset($abris))
        <form action="{{ route('abris.update',$abris) }}" method="POST" class="mx-auto">
            @method('PUT')
            @else
                <form action="{{ route('abris.store') }}" method="POST" class="mx-auto">
                    @endif
                    <fieldset>
                        <legend>Modifier  Abris</legend>
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input id="nom" type="text" name="title" class="form-control" value="{{$abris->nom_Abris}}">
                        </div>
                        <div class="form-group">
                            <label for="type_Abris">Type Abris:</label>
                            <input id="type_Abris" name="type_Abris" class="form-control" value="{{$abris->type_Abris}}">
                        </div>
                        <div class="form-group">
                            <label for="places_Abris">Places Abris :</label>
                            <input id="places_Abris" name="places_Abris" class="form-control" value="{{$abris->places_Abris}}">
                        </div>
                        <div class="form-group">
                            <label for="prixNuit_Abris">prix Nuit Abris :</label>
                            <input id="prixNuit_Abris" name="prixNuit_Abris" class="form-control" value="{{$abris->prixNuit_Abris}}">
                        </div>
                        <div class="form-group">
                            <label for="prixRepas_Abris">prix Repas Abris :</label>
                            <input id="prixRepas_Abris" name="prixRepas_Abris" class="form-control" value="{{$abris->prixRepas_Abris}}">
                        </div>
                        <div class="form-group">
                            <label for="telGardien_Abris">telephone Gardien Abris :</label>
                            <input id="telGardien_Abris" name="telGardien_Abris" type="text" class="form-control" value="{{$abris->telGardien_Abris}}">
                        </div>
                    </fieldset>
                    <fieldset>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </fieldset>



                </form>
        </form>
</div>
</body>
</html>





