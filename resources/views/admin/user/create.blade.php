@extends('admin.master')

@section('title')
    Create User
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Create User</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $key => $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('new-user') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">User Name</label>
                                <div class="col-md-8">
                                    <input type="text" required class="form-control" name="name" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">User Email</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">User Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">User Role</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" class="" name="role" value="teacher" /> Teacher</label>
                                    <label for=""><input type="radio" class="" name="role" value="user" /> User</label>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Create User" />
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
