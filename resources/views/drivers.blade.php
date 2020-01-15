@extends('layouts.app')


@section('content')
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>IC No</th>
            <th>Hp No</th>
            <th>Driving License No</th>
            <th>Expiry Date</th>
            <th>Action</th>
        </tr>
        @foreach ($driver as $drives)
        <tr>
            <td>{{$drives->name}}</td>
            <td>{{$drives->icno}}</td>
            <td>{{$drives->hpno}}</td>
            <td>{{$drives->drivinglicenseno}}</td>
            <td>{{$drives->expirydate}}</td>
            <td><button class="btn btn-primary"> Edit</button>
                <button class="btn btn-primary"> Delete</button>
            </td>
            
        </tr>
        @endforeach
        
       

    </table>
@endsection