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
<h2 style="text-align: center; height: 100px; color: #007bff">Les informations sur vallees  </h2>
<a href="{{ route('vallees.create') }}" class="btn btn-primary">Ajouter</a>
<form action="" method="Get">


    <table class="table">
        <thead class="thead-dark">
        <tr>

            <th scope="col">Nom vallees</th>




        </tr>
        </thead>
        <tbody>
        @foreach ($vallees as $v)
            <tr>


                <td scope="row">{{$v->nom_Vallees}} </td>



                <td scope="row">

                    <a href="{{ route('vallees.edit',  $v->code_Vallees) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('vallees.delete',$v->code_Vallees) }}" class="btn btn-danger">Supprimer</a>


                </td>
            </tr>


        @endforeach
        </tbody>
    </table>
</form>


@include('footer')
</body>
</html>
+-
