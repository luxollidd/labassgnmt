@extends ('layouts.app')

@section('content')

    <div class="container">
        <h2>Create New Owner</h2>
        <form method="post" action="/owner">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="price">Email:</label>
                <input type="name" class="form-control" id="price" placeholder="Enter email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
