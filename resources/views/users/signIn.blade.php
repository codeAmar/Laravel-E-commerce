@extends('layouts.master')

@section('title')
    Sign In
    @endsection

@section('body-content')
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>

            @endforeach

    </div>
    @endif

    <form class="col-md-8 col-md-offset-2 " action="{{route('user.signIn')}}" method="post">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row col-md-8 col-md-offset-4">
            <div class="col-sm-10 col-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-sm-10 col-md-4">
                <button type="reset" class="btn btn-danger">Clear</button>
            </div>
        </div>
        {{csrf_field()}}
    </form>
    @endsection