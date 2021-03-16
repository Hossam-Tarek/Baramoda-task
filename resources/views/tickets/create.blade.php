@extends("layouts.master")

@section("title", "Tickets")

@section("content")
    <div class="row">
        <form action="{{ route("tickets.store") }}" method="POST">
            @csrf

            <select name="start_station_id" id="start-station" class="custom-select d-inline-block mt-3">
                <option selected>Choose a start station</option>
                @foreach($stations as $station)
                    <option value="{{ $station->id }}">{{ $station->name }}</option>
                @endforeach
            </select>
            @error("start_station_id")
            <p class="help text-danger">{{ $errors->first("start_station_id") }}</p>
            @enderror

            <select name="end_station_id" id="end-station" class="custom-select d-inline-block mt-3">
                <option selected>Choose an end station</option>
                @foreach($stations as $station)
                    <option value="{{ $station->id }}">{{ $station->name }}</option>
                @endforeach
            </select>
            @error("end_station_id")
            <p class="help text-danger">{{ $errors->first("end_station_id") }}</p>
            @enderror

            <div class="form-group">
                <label for="name" class="mt-3">Passenger name</label>
                <input type="text" name="name" id="name" class="form-control">
                @error("name")
                <p class="help text-danger">{{ $errors->first("name") }}</p>
                @enderror
                <a href="{{ route("passengers.create") }}" class="btn btn-primary mt-3">Add new passenger</a>
            </div>


            <div class="form-group">
                <label for="departure-date">Departure date</label>
                <input type="date" name="departure_date" id="departure-date" class="form-control">
                @error("departure_date")
                <p class="help text-danger">{{ $errors->first("departure_date") }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="departure-time">Departure time</label>
                <input type="time" name="departure_time" id="departure-time" class="form-control">
                @error("departure_time")
                <p class="help text-danger">{{ $errors->first("departure_time") }}</p>
                @enderror
            </div>

            <select name="price_id" id="price" class="custom-select d-inline-block mt-3">
                <option selected>Choose a price</option>
                @foreach($prices as $price)
                    <option value="{{ $price->id }}">{{ $price->price }}</option>
                @endforeach
            </select>
            @error("end_station_id")
            <p class="help text-danger">{{ $errors->first("end_station_id") }}</p>
            @enderror

            <input type="submit" class="btn btn-primary mt-3" value="Submit">
            <a href="{{ route('tickets.index') }}" class="btn btn-danger mt-3">Cancel</a>
        </form>
    </div>
@endsection
