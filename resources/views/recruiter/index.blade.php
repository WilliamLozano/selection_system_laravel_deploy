@extends('layouts.app')

@section('content')

{{-- <link rel="stylesheet" href="/css/index.css"> --}}

<div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Id usuario</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>fecha de admicion</th>


                </tr>
            </thead>
            <tbody>
                @forelse($recruiters as $recruiter)
                    <tr >
                        <td>{{$recruiter->id}}</td>
                        <td>{{$recruiter->user_id}}</td>
                        <td>{{$recruiter->user->name}}</td>
                        <td>{{$recruiter->user->last_name}}</td>
                        <td>{{$recruiter->admission_date}}</td>
                        
                    </tr>
                
            </tbody>
            @empty
            <p>No hay datos</p>
            @endforelse
        </table>
        
</div>
@endsection


    

    


