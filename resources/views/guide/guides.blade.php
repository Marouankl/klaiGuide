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
<div>
    <a style="position:absolute; width: 300px;
  border: 3px solid #73AD21;
  padding: 10px; color: #005cbf" href="">Espace pour les guides </a>
</div>
<h2 style="text-align: center; height: 100px; color: #7abaff">Les Guides disponibles pour vous accompagner   </h2>


<form action="" method="Get">


    <table class="table" style="height: 100px;" >
        <thead class="thead-dark" >
        <tr>

            <th scope="col">Nom de guides</th>
            <th scope="col">Prénom de guides</th>



        </tr>
        </thead>
        <tbody>
        @foreach ($guides as $guide)
            <tr>


                <td scope="row">{{$guide->nom_Guides}} </td>
                <td scope="row">{{$guide->prenom_Guides}} </td>
                <td scope="row">

                    <a href="{{ route('guides.edit',  $guide->code_Guides) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('guides.delete.destroy',$guide->code_Guides) }}" class="btn btn-danger">Supprimer</a>


                </td>



            </tr>


        @endforeach
        </tbody>

    </table>

</form>


@include('footer')
</body>
</html>
