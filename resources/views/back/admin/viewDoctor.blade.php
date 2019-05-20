@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
           
            @if(Session::get('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
    
          @if(Session::get('error'))
            <div class="alert alert-danger">{{Session::get('error')}}</div>
          @endif
        <h1>Doctors</h1>
          <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Department Name</th>
                <th>Doctor Id</th>
                <th>Username</th>
            </tr>
        @if(count($doctor)>0)
        @foreach($doctor as $d)
            <tr>
            <td>{{$d->name}}</td>
            <td>{{$d->department->departmentName}}</td>
            <td>{{$d->doctorId}}</td>
            <td>{{$d->doctorUsername}}</td>
            </tr>
        @endforeach
        @endif 
        </table>   

        </div>
    </div>
</div>
@endsection
