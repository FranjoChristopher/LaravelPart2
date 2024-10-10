@extends('students.layout')
@section('content')

<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg rounded">
                <div class="card-header bg-primary text-white rounded-top">
                    <h2 class="mb-0">Student Details</h2>
                </div>
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Name: <span class="font-weight-bold">{{ $students->name }}</span></h5>
                    
                    <p class="card-text mb-2"><strong>Email:</strong> {{ $students->email }}</p>
                    <p class="card-text mb-2"><strong>Team:</strong> {{ $students->team }}</p>
                    <p class="card-text mb-2"><strong>Principal:</strong> {{ $students->principal }}</p>
                    <p class="card-text mb-2"><strong>Created At:</strong> {{ $students->created_at->format('M d, Y H:i') }}</p>
                    <p class="card-text mb-2"><strong>Updated At:</strong> {{ $students->updated_at->format('M d, Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
