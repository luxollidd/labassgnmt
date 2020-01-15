@extends ('layouts.app')

@section('content')

    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <form method="post" action="/owner/{{$ownerdit->id}}">
                @csrf
                @method('put')
                <div class="modal-header">
                    Owner Details
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    Name: <input type="name" value="{{$ownerdit->name}}" name="name"><br>
                    Email  : <input type="name" value="{{$ownerdit->email}}" name="email">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="hidden" value="{{$ownerdit->id}}">
                    <input type="submit" class="btn btn-primary" value="Edit">
                </div>
            </form>
        </div>
    </div>
@endsection
