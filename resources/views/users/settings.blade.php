@extends('layouts.master')

@section('title')
    Settings
    @endsection


@section('body-content')

    <div class="container-fluid">
        <div class="row">

    <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar ">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Analytics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Export</a>
            </li>
        </ul>

        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Nav item</a>
            </li>

        </ul>
    </nav>


    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1 class="text-center">Dashboard</h1>

        <section class="row text-center placeholders">
            <div class="col-md-12  placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle img-circle" alt="Generic placeholder thumbnail">
                <h4>username</h4>
                <div class="text-muted">bio</div>
            </div>

        </section>

        <h2 class="text-center">Section title</h2>
        <div class="table-responsive text-center">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th class="text-center">Setting</th>
                    <th class="text-center">State</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Setting 1</td>
                    <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                    </td>
                </tr>
                <tr>
                    <td>Setting 1</td>
                    <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                </tr>
                <tr>
                    <td>Setting 1</td>
                    <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                </tr>
                <tr>
                    <td>Setting 1</td>
                    <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                </tr>
                <tr>
                    <td>Setting 1</td>
                    <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                </tr>
                <tr>
                    <td>Setting 1</td>
                    <td><input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>

        </div>
    </div>

    @endsection

