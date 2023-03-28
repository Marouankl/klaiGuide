<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
@include('header')
<h2 style="text-align: center; height: 100px; color: #007bff">Les informations sur Abris  </h2>
<a href="{{ route('abris.create') }}" class="btn btn-primary">Ajouter</a>
<form action="" method="Get">


    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Nom Abris
            <th scope="col"> Type Abris</th>
            <th scope="col">Altitude </th>
            <th scope="col"> Places disponible</th>
            <th scope="col"> Type Abris</th>
            <th scope="col">Altitude </th>
            <th scope="col"> tel de gardien</th>
            <th scope="col">Actions</th>


        </tr>
        </thead>
        <tbody>
        @foreach ($abris as $a)
        <tr>


            <td scope="row">{{$a->nom_Abris}} </td>
            <td scope="row">{{$a->type_Abris}} </td>
            <td scope="row">{{$a->altitude_Abris}} </td>
            <td scope="row">{{$a->places_Abris}}</td>
            <td scope="row">{{$a->prixNuit_Abris}}</td>
            <td scope="row">{{$a->prixRepas_Abris}}</td>
            <td scope="row">{{$a->telGardien_Abris}}</td>


            <td scope="row">

                <a href="{{ route('abris.edit',  $a->code_Abris) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('abris.delete',$a->code_Abris) }}" class="btn btn-danger">Supprimer</a>


            </td>
        </tr>


 @endforeach
        </tbody>
    </table>
</form>


@include('footer')
</body>
</html>
