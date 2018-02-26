@extends('layouts.default')

@section('content')


    <div class="card">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Message</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="/message" >Need Info</a>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                data-target="#delete"><span class="glyphicon glyphicon-trash"></span>Delete</button>
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a href="/message">Information regarding signup</a>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                data-target="#delete"><span class="glyphicon glyphicon-trash"></span>Delete</button>
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a href="/message" >How to Unsubscribe</a>
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                data-target="#delete"><span class="glyphicon glyphicon-trash"></span>Delete</button>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection