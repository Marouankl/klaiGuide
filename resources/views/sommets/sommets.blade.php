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

            <th scope="col">Nom_sommets</th>
            <th scope="col"> Altidue_sommets</th>



        </tr>
        </thead>
        <tbody>
        @foreach ($sommets as $sommet)
            <tr>


                <td scope="row">{{$sommet->nom_Sommets}} </td>
                <td scope="row">{{$sommet->altitude_Sommets}} </td>



                <td scope="row">

                    <a href="{{ route('sommets.edit',  $sommet->code_Sommets) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('sommets.delete',$sommet->code_Sommets) }}" class="btn btn-danger">Supprimer</a>


                </td>
            </tr>


        @endforeach
        </tbody>
    </table>
</form>


@include('footer')
</body>
</html>
