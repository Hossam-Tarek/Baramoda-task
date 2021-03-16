@extends("layouts.master")

@section("title", "Stations")

@section("content")
    <div class="row">
        <form action="{{ route("stations.update", $station) }}" method="POST">
            @csrf
            @method('put')
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ $station->name }}">
            @error("name")
            <p class="invalid-feedback">{{ $errors->first("name") }}</p>
            @enderror

            <label for="order">Order</label>
            <input type="number" name="order" id="order" class="form-control @error('order') is-invalid @enderror" min="1"
                   value="{{ $station->order }}">
            @error("order")
            <p class="invalid-feedback">{{ $errors->first("order") }}</p>
            @enderror

            <input type="submit" class="btn btn-primary mt-3" value="Edit">
            <a href="{{ route("stations.index") }}" class="btn btn-danger mt-3">Cancel</a>
        </form>
    </div>
@endsection
