@extends("layouts.master")

@section("title", "Passengers")

@section("content")
    <div class="row">
        <a href="{{ route("passengers.create") }}" class="btn btn-primary mb-3 mt-3">Add new passenger</a>
        <div class="col-sm-12">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Phone number</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($passengers as $passenger)
                    <tr>
                        <td>{{ $passenger->name }}</td>
                        <td>{{ $passenger->id_card_num }}</td>
                        <td>{{ $passenger->phone_number }}</td>
                        <td>
                            <a href="{{ route("passengers.edit", $passenger) }}" class="btn btn-secondary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route("passengers.destroy", $passenger) }}" method="POST">
                                @csrf
                                @method("delete")
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
