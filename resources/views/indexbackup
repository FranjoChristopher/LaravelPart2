@extends('students.layout')
@section('content')
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-12">
                <div class="card shadow-lg rounded">
                    <div class="card-header bg-primary text-white rounded-top">
                        <h2 class="mb-0 text-center text-md-left">Formula 1 Drivers</h2>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-end mb-4">
                            <a href="{{ url('/student/create') }}" class="btn btn-outline-primary btn-lg" title="Add New Student">
                                <i class="fa fa-plus mr-2"></i> Add New
                            </a>
                        </div>

                        <!-- Responsive Table without Scrollbars -->
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped table-dark">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th class="d-none d-md-table-cell">Email</th>
                                        <th class="d-none d-md-table-cell">Password</th>
                                        <th>Team</th>
                                        <th>Principal</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td class="d-none d-md-table-cell">{{ $item->email }}</td>
                                        <td class="d-none d-md-table-cell">{{ $item->password }}</td>
                                        <td>{{ $item->team }}</td>
                                        <td>{{ $item->principal }}</td>
                                        <td class="d-flex">
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student" class="btn btn-outline-info btn-sm mr-2">
                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                            </a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student" class="btn btn-outline-primary btn-sm mr-2">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Stacked view for mobile -->
                                    <tr class="d-md-none">
                                        <td colspan="7">
                                            <div class="d-flex flex-column">
                                                <strong>Name:</strong> {{ $item->name }}
                                                <strong>Email:</strong> {{ $item->email }}
                                                <strong>Password:</strong> {{ $item->password }}
                                                <strong>Team:</strong> {{ $item->team }}
                                                <strong>Principal:</strong> {{ $item->principal }}
                                                <div class="mt-2 d-flex">
                                                    <a href="{{ url('/student/' . $item->id) }}" title="View Student" class="btn btn-outline-info btn-sm mr-2">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                                    </a>
                                                    <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student" class="btn btn-outline-primary btn-sm mr-2">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                    </a>
                                                    <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
