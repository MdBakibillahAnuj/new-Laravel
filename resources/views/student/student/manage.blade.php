@extends('admin.master')

@section('title')
    Manage Profile
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Profile Info</h4>
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>
                                        <img src="{{ asset($student->image) }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td>{{ $student->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
{{--                                        <a href="{{ route('edit-profile',['id' => $student->id]) }}" class="btn btn-info">edit</a>--}}
                                        <a href="{{ route('delete-student-info',['id' => $student->id]) }}" class="btn btn-danger">del</a>
                                        <a href="{{ route('change-student-profile-status',['id' => $student->id]) }}" class="btn btn-info">status</a>
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
@endsection
