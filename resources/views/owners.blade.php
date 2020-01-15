@extends('layouts.app')


@section('content')
    <h1>Owner</h1>
    <a href="{{ url('/owner/create')}}"><button class="btn btn-outline-primary float-right" >Add Owner</button></a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($owner as $owners)
        <tr>
            <td>{{$owners->name}}</td>
            <td>{{$owners->email}}</td>
            <td><a href="/owner/{{$owners->id}}">
                    <button type="button" class="btn btn-primary" style="margin-left:10px">
                        Edit
                    </button>
                </a>
                <form method="post" action="/owner/{{$owners->id}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" style="margin-left:10px">
                        Delete
                    </button>
                </form></div>
            </td>
        </tr>
        @endforeach



    </table>
@endsection
