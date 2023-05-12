@extends('layouts.layoutBase')


@section('page-title','')


@section('main-content')

    <div class="container">
        <div class="row">
            <table class="table table-hover table-bordered border-white text-center">
                <thead class="table-light">
                  <tr>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Ora di partenza</th>
                    <th scope="col">Data di arrivo</th>
                    <th scope="col">Ora di arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">In Orario</th>
                    <th scope="col">Cancellato</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{$train->Stazione_di_partenza}}</td>
                            <td>{{$train->Stazione_di_arrivo}}</td>
                            <td>{{$train->Data_di_partenza}}</td>
                            <td>{{$train->Orario_di_partenza}}</td>
                            <td>{{$train->Data_di_arrivo}}</td>
                            <td>{{$train->Orario_di_arrivo}}</td>
                            <td>{{$train->Codice_Treno}}</td>
                            <td>{{$train->In_orario==0?'No':'Si'}}</td>
                            <td>{{$train->Cancellato==0?'No':'Si'}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>


@endsection
