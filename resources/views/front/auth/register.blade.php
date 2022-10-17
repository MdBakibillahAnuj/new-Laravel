@extends('front.master')

@section('title')
    Register Page
@endsection

@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <div class="card m-t-100">
                        <div class="card-header">
                            <h2 class="text-center">Register</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Username</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-4 col-form-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password" />
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-4 col-form-label">Confirm Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" name="password_confirmation" />
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="" class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <div class="d-grid">
                                            <input type="submit" class="btn col-12 btn-success" value="Register" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
