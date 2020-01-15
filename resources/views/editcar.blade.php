@extends ('layouts.app')

@section('content')

    <div class="container">
        <h2>Create New Car</h2>
        <form method="post" action="/car/{{$a->id}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Plate Number:</label>
                <input type="name" class="form-control" id="name" value="{{$a->RegNum}}" name="plate">
            </div>
            <div class="form-group">
                <label for="price">Manufacturer:</label>
                <input type="name" class="form-control" id="price" value="{{$a->Manufacturer}}" name="manu">
            </div>

            <div class="form-group">
                <label for="price">Model:</label>
                <input type="name" class="form-control" id="price" value="{{$a->Model}}" name="model">
            </div>

            <div class="form-group">
                <label for="price">Year:</label>
                <input type="name" class="form-control" id="price" value="{{$a->YearMade}}" name="year">
            </div>


            <div class="form-group">
                <label for="price">Manufacturer:</label>
                <select name="owner">
                    @foreach ($b as $owner)
                        <option
                            value="{{$owner->id}}"

                            @if ($owner->name == $a->owner->name)
                            selected
                            @endif>

                            {{$owner->name}}

                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
