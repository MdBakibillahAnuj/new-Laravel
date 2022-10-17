@extends('front.master')
@section('title')
    {{ $subject->title }}
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <img src="{{ asset($subject->image) }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>{{ $subject->title }}</h2>
                    <p style="text-align: justify">{{ $subject->short_discription }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    {!! $subject->long_discription !!}
                </div>
                <div class="col-md-4">
                    <div class="d-grid">
                        <a href="" class="btn btn-success col-md-12">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
