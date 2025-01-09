@extends('contact')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h2>Payments Application</h2>
        </div>
        <div class="card-body">
            <!-- Updated Add New button to blue -->
            <a href="{{ url('/payments/create') }}" class="btn btn-primary btn-sm" title="Add New Payment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br/><br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enrollment No</th>
                            <th>Paid date</th>
                            <th>Amount</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enroll_no }}</td>
                            <td>{{ $item->paid_date }}</td>
                            <td>{{ $item->amount }}</td>

                            <td>
                                <a href="{{ url('/payments/' . $item->id) }}" title="View Payment">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                </a>
                                <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                </a>

                                <form method="POST" action="{{ url('/payments' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm('Confirm delete?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection
