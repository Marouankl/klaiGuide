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
    @if (isset($inspections))
        <form action="{{ route('ascensions.update',$ascens) }}" method="POST" class="mx-auto">
            @method('PUT')
            @else
                <form action="{{ route('ascensions.store') }}" method="POST" class="mx-auto">
                    @endif
                    <fieldset>
                        <legend>Pour client</legend>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="{{$ascens->abris->code_Abris}}">Abris</option>
                            <option value="{{$ascens->sommets->code_Sommets}}">Sommets</option>

                        </select>
                        <div class="form-group">
                            <label for="telephone">Téléphone :</label>
                            <input id="telephone" name="telephone" class="form-control" value="{{$ascens->defficulte_Ascension}}">
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse :</label>
                            <input id="adresse" name="adresse" class="form-control" value="{{$ascens->duree_Ascension}}">
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





