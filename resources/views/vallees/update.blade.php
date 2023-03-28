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
        <form action="{{ route('vallees.update',$vallees) }}" method="POST" class="mx-auto">
            @method('PUT')
            @else
                <form action="{{ route('vallees.store') }}" method="POST" class="mx-auto">
                    @endif
                    <fieldset>
                        <legend>Pour client</legend>
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input id="nom" type="text" name="title" class="form-control" value="{{$vallees->nom_Vallees}}">
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





