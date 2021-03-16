@extends("layouts.master")

@section("title", "Prices")

@section("content")
    <div class="row">
        <form action="{{ route("prices.update", $price) }}" method="POST">
            @csrf
            @method("put")
            <label for="num-of-stations">Number of stations</label>
            <input type="number" name="num_of_stations" class="form-control @error('num_of_stations') is-invalid @enderror"
                   min="0" max="1000" value="{{ $price->num_of_stations }}">
            @error("num_of_stations")
            <p class="invalid-feedback">{{ $errors->first('num_of_stations') }}</p>
            @enderror

            <label for="price">Price</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                   min="0" value="{{ $price->price }}">
            @error("price")
            <p class="invalid-feedback">{{ $errors->first('price') }}</p>
            @enderror

            <input type="submit" class="btn btn-primary mt-3" value="Edit">
            <a href="{{ route("prices.index") }}" class="btn btn-danger mt-3">Cancel</a>
        </form>
    </div>
@endsection
