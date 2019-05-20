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
            <h1>Add Department</h1>
        <form action="{{route('add-department.store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="departmentName">Department Name</label>
                    <input type="text" class="form-control" id="departmentName" name="departmentName" aria-describedby="departmentName" placeholder="Enter Department Name" required autofocus>
                </div>
                <div class="form-group">
                        <label for="departmentId">Department id</label>
                        <input type="text" class="form-control" id="departmentId" name="departmentId" aria-describedby="departmentId" placeholder="Enter Department id" required>
                    </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
