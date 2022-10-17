@extends('admin.master')

@section('title')
    Manage Subject
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Subject</h4>
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Teacher Name</th>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Fee</th>
                                <th>Image</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subjects as $subject)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ \App\Models\User::find($subject->teacher_id)->name }}</td>
                                    <td>{{ $subject->title }}</td>
                                    <td>{{ $subject->code }}</td>
                                    <td>{{ $subject->fee }}</td>
                                    <td>
                                        <img src="{{ asset($subject->image) }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td>{!! $subject->short_description !!}</td>
                                    <td>{!! substr_replace($subject->long_description, '...', 260) !!}</td>
                                    <td>{{ $subject->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('change-subject-status',['id' => $subject->id]) }}" class="btn btn-info">status</a>
                                        <a href="{{ route('edit-subject',['id' => $subject->id]) }}" class="btn btn-secondary">edit</a>
                                        <a href="{{ route('delete-subject',['id' => $subject->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger">delete</a>

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
