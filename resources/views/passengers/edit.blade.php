@extends("layouts.master")

@section("title", "Passenger")

@section("content")
    <div class="row">
        <form action="{{ route("passengers.update", $passenger) }}" method="POST">
            @csrf
            @method('put')
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ $passenger->name }}">
            @error("name")
            <p class="invalid-feedback">{{ $errors->first("name") }}</p>
            @enderror

            <label for="id-card-num">ID</label>
            <input type="text" name="id_card_num" id="id-card-num" class="form-control @error('name') is-invalid @enderror"
                   value="{{ $passenger->id_card_num }}">
            @error("id_card_num")
            <p class="invalid-feedback">{{ $errors->first("id_card_num") }}</p>
            @enderror

            <label for="phone-number">Phone number</label>
            <input type="text" name="phone_number" id="phone-number" class="form-control @error('phone_number') is-invalid @enderror"
                   value="{{ $passenger->phone_number }}">
            @error("phone_number")
            <p class="invalid-feedback">{{ $errors->first("phone_number") }}</p>
            @enderror

            <input type="submit" class="btn btn-primary mt-3" value="Submit">
            <a href="{{ route('passengers.index') }}" class="btn btn-danger mt-3">Cancel</a>
        </form>
    </div>
@endsection
