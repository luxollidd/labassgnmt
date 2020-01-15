@extends('layouts.app')

@section('content')
    <h1>Car Owner</h1>
    <a href="{{ url('/car/create')}}"><button class="btn btn-outline-primary float-right" >Add New Car</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Plate Number</th>
                <th scope="col">Manufacturer</th>
                <th scope="col">Model</th>
                <th scope="col">Year</th>
                <th scope="col">Owner</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($cars as $element)
            <tr>
                <td>{{$element->id}}</td>
                <td>{{$element->RegNum}}</td>
                <td>{{$element->Manufacturer}}</td>
                <td>{{$element->Model}}</td>
                <td>{{$element->YearMade}}</td>
                <td>{{$element->owner->name}}</td>
                    <td><a href="/car/{{$element->id}}">
                        <button type="button" class="btn btn-primary" style="margin-left:10px">
                            Edit
                        </button>
                    </a>


                        <form method="post" action="/car/{{$element->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" style="margin-left:10px">
                                Delete
                            </button>
                        </form></div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection
