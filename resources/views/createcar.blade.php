@extends ('layouts.app')

@section('content')

    <div class="container">
        <h2>Create New Car</h2>
        <form method="post" action="/car">
            @csrf
            <div class="form-group">
                <label for="name">Plate Number:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter plate no." name="plate">
            </div>
            <div class="form-group">
                <label for="price">Manufacturer:</label>
                <input type="name" class="form-control" id="price" placeholder="Enter manufacturer" name="manu">
            </div>

            <div class="form-group">
                <label for="price">Model:</label>
                <input type="name" class="form-control" id="price" placeholder="Enter model" name="model">
            </div>

            <div class="form-group">
                <label for="price">Year:</label>
                <input type="name" class="form-control" id="price" placeholder="Enter year" name="year">
            </div>


            <div class="form-group">
                <label for="price">Manufacturer:</label>
                <select name="owner">
                    @foreach ($owner as $owner)
                        <option value="{{$owner->id}}">{{$owner->name}}</option>
                        @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
