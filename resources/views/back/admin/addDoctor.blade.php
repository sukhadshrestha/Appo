@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                @if ($errors)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{route('add-doctor.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter  Name">
                </div>
                <div class="form-group">
                        <label for="departmentId">Department Name</label>
                        <select class="browser-default custom-select" id="departmentId" name="departmentId">
                            <option selected>Select Doctor Department</option>
                            @if(isset($department))
                                @foreach($department as $d)
                                <option value="{{$d->departmentId}}">{{$d->departmentName}}</option>
                                @endforeach
                            @endif
                        </select>
                </div>
                <div class="form-group">
                        <label for="doctorId">Doctor Id</label>
                        <input type="text" class="form-control" id="doctorId" name="doctorId" aria-describedby="doctorId" placeholder="Enter  doctor id">
                    </div>

                <div class="form-group">
                        <label for="doctorUsername">Doctor Username</label>
                        <input type="text" class="form-control" id="doctorUsername" name="doctorUsername" aria-describedby="doctorUsername" placeholder="Enter  doctor Username">
                    </div>
                <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Enter  Password">
                    </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
