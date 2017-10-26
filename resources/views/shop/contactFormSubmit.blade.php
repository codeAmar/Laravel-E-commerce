@extends('layouts.master')

@section('title')
    Form Submission
@endsection

@section('body-content')
    <div class="text-success col-md-offset-4 col-md-8 row">
       <p>
       thanks for submitting the contact form
       </p>
        <a href="{{route('index')}}" class="btn btn-primary">
            Return to Home
        </a>
    </div>
@endsection
