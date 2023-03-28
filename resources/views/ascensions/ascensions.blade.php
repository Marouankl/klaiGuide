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
<a href="{{ route('ascensions.create') }}" class="btn btn-primary">Ajouter</a>
<form action="" method="Get">


    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Nom Abris</th>
            <th scope="col"> Code Sommets</th>
            <th scope="col">defficulte Ascension </th>
            <th scope="col"> duree_Ascension</th>
          +

        </tr>
        </thead>
        <tbody>
        @foreach ($ascens as $a)
            <tr>


                <td scope="row">{{$a->abris->nom_Abris}} </td>
                <td scope="row">{{$a->sommets->Code_Sommets}} </td>
                <td scope="row">{{$a->defficulte_Ascension}} </td>
                <td scope="row">{{$a->duree_Ascension}}</td>



                <td scope="row">

                    <a href="{{ route('ascensions.edit',  $a->abris->code_Abris) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('ascensions.delete',$a->code_Abris) }}" class="btn btn-danger">Supprimer</a>


                </td>
            </tr>


        @endforeach
        </tbody>
    </table>
</form>


@include('footer')
</body>
</html>
