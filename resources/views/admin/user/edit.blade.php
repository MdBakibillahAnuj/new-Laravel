@extends('admin.master')

@section('title')
    Edit User
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $key => $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form action="{{ route('update-user',['id' => $user->id]) }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">User Name</label>
                                <div class="col-md-8">
                                    <input type="text" value="{{ $user->name }}" class="form-control" name="name" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">User Email</label>
                                <div class="col-md-8">
                                    <input type="email" value="{{ $user->email }}" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label">User Role</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" class="" {{ $user->role == 'teacher' ? 'checked' : '' }} name="role" value="teacher" /> Teacher</label>
                                    <label for=""><input type="radio" class="" {{ $user->role == 'user' ? 'checked' : '' }} name="role" value="user" /> User</label>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <div class="d-grid">
                                        <input type="submit" class="btn col-12 btn-success" value="Update User" />
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
