@extends('admin.master')

@section('title')
    Create Subject
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Subject</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('new-subject') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Subject Title</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Fee</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="fee" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Featured Image</label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control-file" name="image" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="editor" cols="30" class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Create Subject" />
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
