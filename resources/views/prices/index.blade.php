@extends("layouts.master")

@section("title", "Prices")

@section("content")
    <div class="row">
        <a href="{{ route("prices.create") }}" class="btn btn-primary mb-3 mt-3">Add new price</a>
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Number of stations</th>
                    <th>Price</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($prices as $price)
                    <tr>
                        <td>{{ $price->num_of_stations}}</td>
                        <td>{{ $price->price}}</td>
                        <td><a href="{{ route("prices.edit", $price) }}" class="btn btn-secondary">Edit</a></td>
                        <td>
                            <form action="{{ route("prices.destroy", $price) }}" method="POST">
                                @csrf
                                @method("delete")
                                <input type="submit" class="btn badge-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
