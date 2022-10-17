@extends('admin.master')

@section('title')
    Update Profile
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-profile', ['id' => $teacher->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Teacher Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" value="{{ $teacher->name }}" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" value="{{ $teacher->email }}" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Phone</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="phone" value="{{ $teacher->phone }}" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="image" />
                                    <img src="{{ asset($teacher->image) }}" alt="" style="height: 100px; width: 100px">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Address</label>
                                <div class="col-md-8">
                                    <textarea name="address" id="" class="form-control" cols="30" rows="10">{{ $teacher->address }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="editor" cols="30" class="form-control" rows="10">{!! $teacher->description !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Update Profile" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
