@extends('layouts.master')

@section('title')
Registration
    @endsection


@section('body-content')
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
    </div>

    @endif
<form action="{{ route('user.signUp') }}" method="post" class="col-md-8 col-md-offset-2">
    <div class="form-group ">
        <label for="cellPhone">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="amarjot" required>
    </div>
    <div class="form-row ">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password"placeholder="Password" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity" name="city" required>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control" required name="state">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip" required name="zip">
        </div>
    </div>
    <div class="form-group ">
        <label for="cellPhone">Mobile No.</label>
        <input type="number" class="form-control" id="cellPhone" name="cell" maxlength="10" placeholder="0000001234" required>
    </div>
    <div class="form-group col-md-4 col-md-offset-8">
        <button type="reset" class="btn btn-warning">Clear</button>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
    {{ csrf_field() }}
</form>

    @endsection