@extends('contact')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h2>Enrollment Application</h2>
        </div>
        <div class="card-body">
            <!-- Add New button updated to blue -->
            <a href="{{ url('/enrollments/create') }}" class="btn btn-primary btn-sm" title="Add New Enrollment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br/><br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment No</th>
                            <th>Batch</th>
                            <th>Student</th>
                            <th>Join Date</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($enrollments as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->enrollment_no }}</td>
                                <td>{{ $item->batch_id }}</td>
                                <td>{{ $item->student_id }}</td>
                                <td>{{ $item->join_date }}</td>
                                <td>{{ $item->fee }}</td>
                                <td>
                                    <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollment">
                                        <button class="btn btn-info btn-sm">
                                            <i class="fa fa-eye" aria-hidden="true"></i> View
                                        </button>
                                    </a>
                                    <!-- Edit button already blue -->
                                    <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollment">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                        </button>
                                    </a>
                                    <form method="POST" action="{{ url('/enrollments/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment" onclick="return confirm('Confirm delete?')">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No enrollments found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
