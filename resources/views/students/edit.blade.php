@extends('students.layout')
@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-primary text-white rounded-top">
                    <h2 class="mb-0">Edit Driver</h2>
                </div>
                <div class="card-body p-4">
                    <form action="{{ url('student/' . $students->id) }}" method="POST">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        
                        <!-- Name Field -->
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control" placeholder="Enter driver's name">
                        </div>
                        
                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ $students->email }}" class="form-control" placeholder="Enter driver's email">
                        </div>
                        
                        <!-- Password Field -->
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Do not leave blank">
                        </div>
                        
                        <!-- Team Field -->
                        <div class="form-group mb-3">
                            <label for="team">Team</label>
                            <input type="text" name="team" id="team" value="{{ $students->team }}" class="form-control" placeholder="Enter driver's team">
                        </div>
                        
                        <!-- Principal Field -->
                        <div class="form-group mb-3">
                            <label for="principal">Principal</label>
                            <input type="text" name="principal" id="principal" value="{{ $students->principal }}" class="form-control" placeholder="Enter team principal">
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Update" class="btn btn-outline-success btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
