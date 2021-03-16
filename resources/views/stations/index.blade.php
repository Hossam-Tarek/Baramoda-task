@extends("layouts.master")

@section("title", "Stations")

@section("content")
    <div class="row">
        <a href="{{ route("stations.create") }}" class="btn btn-primary mb-3 mt-3">Add new station</a>
        <div class="col-sm-12">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>order</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($stations as $station)
                    <tr>
                        <td>{{ $station->name}}</td>
                        <td>{{ $station->order}}</td>
                        <td><a href="{{ route("stations.edit", $station) }}" class="btn btn-secondary">Edit</a></td>
                        <td>
                            <form action="{{ route("stations.destroy", $station) }}" method="POST">
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
