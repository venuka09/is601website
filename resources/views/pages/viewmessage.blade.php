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
                <td>Subject: Need Info <br>
                    From Email: abcd@gmail.com <br>
                    Message: Please let me know how to contact costumer care.
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Subject: Information regarding signup <br>
                    From Email: efgh@gmail.com <br>
                    Message: Please let me know how to signup for the benefits.
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>
                    </p>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Subject: How to Unsubscribe <br>
                    From Email: ijkl@gmail.com <br>
                    Message: Please let me know how can I unsubribe or delete my account.
                </td>
                <td>
                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection