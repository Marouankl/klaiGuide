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
        <form action="{{ route('sommets.update',$sommets) }}" method="POST" class="mx-auto">
            @method('PUT')
            @else
                <form action="{{ route('sommets.store') }}" method="POST" class="mx-auto">
                    @endif
                    <fieldset>
                        <legend>Pour client</legend>
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input id="nom" type="text" name="title" class="form-control" value="{{$sommets->nom_Sommets}}">
                        </div>
                        <div class="form-group">
                            <label for="date">Date de rendez-vous :</label>
                            <input id="date" name="date" class="form-control" value="{{$sommets->altitude_Sommets}}">
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





