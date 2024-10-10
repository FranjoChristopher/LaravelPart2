@extends('students.layout')
@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-primary text-white rounded-top">
                    <h2 class="mb-0">Create New Driver</h2>
                </div>
                <div class="card-body p-4">
                    <form action="{{ url('student') }}" method="post">
                        {!! csrf_field() !!}
                        
                        <!-- Name Field -->
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter driver's name" required>
                        </div>
                        
                        <!-- Email Field -->
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter driver's email" required>
                        </div>
                        
                        <!-- Password Field -->
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Create a password" required>
                        </div>
                        
                        <!-- Team Field -->
                        <div class="form-group mb-3">
                            <label for="team">Team</label>
                            <input type="text" name="team" id="team" class="form-control" placeholder="Enter driver's team">
                        </div>
                        
                        <!-- Principal Field -->
                        <div class="form-group mb-3">
                            <label for="principal">Principal</label>
                            <input type="text" name="principal" id="principal" class="form-control" placeholder="Enter team principal">
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Save" class="btn btn-outline-success btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
