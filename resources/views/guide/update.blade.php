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
        <form action="{{ route('guides.update',$guides) }}" method="POST" class="mx-auto">
            @method('PUT')
            @else
                <form action="{{ route('guides.store') }}" method="POST" class="mx-auto">
                    @endif
                    <fieldset>
                        <legend>Pour client</legend>
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input id="nom" type="text" name="title" class="form-control" value="{{$guides->nom_Guides}}">
                        </div>
                        <div class="form-group">
                            <label for="pernom">Pernom :</label>
                            <input id="pernom" name="pernom" class="form-control" value="{{$guides->pernom_Guides}}">
                        </div>
                        <div class="form-group">
                            <label for="email">email :</label>
                            <input id="email" name="email" class="form-control" value="{{$guides->email_Guides}}">
                        </div>
                        <div class="form-group">
                            <label for="mot de passe">mot de passe :</label>
                            <input id="motdepasse" name="motdepasse" class="form-control" value="{{$guides->motdepasse_Guides}}">
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





