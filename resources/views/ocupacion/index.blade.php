
@extends('layouts.app')

@section('content')

<section class="container">
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th> nombre ocupacion</th>

        </tr>
    </thead>

    @forelse ($ocupaciones as $ocupacion)
        <tbody>
            <tr>
                <td>{{$ocupacion->id}}</td>
                <td>{{$ocupacion->nombre_ocupacion}}</td>

            </tr>
        </tbody>

    @empty
    <p>no hay datos</p>

    @endforelse
</table>
</section>
<a href="{{route('ocupacion.create')}}" class="">crear ocupacion</a>


@endsection
