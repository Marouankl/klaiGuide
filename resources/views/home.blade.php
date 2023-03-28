@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tableau de Bord') }}</div>




            </div>
        </div>
    </div>
</div>
<a href="{{route('abris.index')}}" class="btn btn-primary">Abris</a>
<a href="{{route('ascensions.index')}}" class="btn btn-primary">Ascensions</a>
<a href="{{route('guides.index')}}" class="btn btn-primary">Guide</a>
<a href="{{route('sommets.index')}}" class="btn btn-primary">Sommets</a>
<a href="" class="btn btn-primary">Valles</a>



                    <form action="" method="GET">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">nbPersonnes</th>
                                <th scope="col"> date debut</th>
                                <th scope="col"> date fin</th>
                                <th scope="col">nom de sommets </th>
                                <th scope="col"> Altitude</th>
                                <th scope="col"> nom d'abris</th>
                                <th scope="col"> reservation</th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($randonne as $r)

                                <tr>
                                    <td scope="row">{{ $r->nbPersonnees_Randonnees }} </td>
                                    <td scope="row">{{ $r->dateDebut_Randonnees }} </td>
                                    <td scope="row">{{ $r->dateFin_Randonnees }} </td>
                                    <td scope="row">{{ $r->sommets->nom_Sommets }} </td>
                                    <td scope="row">{{ $r->sommets->altidue_Sommets }} </td>
                                    <td scope="row">{{ $r->abris->nom_Abris }} </td>
                                    <td scope="row">{{ $r->reserver->statut_Reserver }} </td>

                                </tr>


                            @endforeach
                            </tbody>
                        </table>
                    </form>







@endsection
