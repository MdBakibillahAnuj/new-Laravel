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
                        <h4>Teacher Profile Info</h4>
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
                                    <th>About</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->phone }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    <td>
                                        <img src="{{ asset($teacher->image) }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td>{!! $teacher->description !!}</td>
                                    <td>{{ $teacher->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-profile',['id' => $teacher->id]) }}" class="btn btn-info">edit</a>
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
