@extends('layouts.master')

@section('title')
    Contact Page
@endsection


@section('body-content')

    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($error->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </div>
        @endif

    <form action="{{route('contact')}}" method="post" class="col-md-6 col-md-offset-3">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleTextArea">Comments</label>
            <textarea class="form-control" id="exampleTextArea" name="comments"rows="3"></textarea>
        </div>
<div class="form-group text-right col-md-8 col-md-offset-4">
    <button type="reset" class="btn btn-danger">Clear</button>
    <button type="submit" class="btn btn-success">Submit</button>

</div>
        {{csrf_field()}}
    </form>


@endsection