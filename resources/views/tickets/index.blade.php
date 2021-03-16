@extends("layouts.master")

@section("title", "Tickets")

@section("content")
    <div class="row">
        <a href="{{ route("tickets.create") }}" class="btn btn-primary mb-3 mt-3">Add new Ticket</a>
        <div class="col-sm-12">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>Start station</th>
                    <th>End station</th>
                    <th>Price</th>
                    <th>Passenger</th>
                    <th>Departure date</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->startStation->name }}</td>
                        <td>{{ $ticket->endStation->name }}</td>
                        <td>{{ $ticket->price->price }}</td>
                        <td>{{ $ticket->passenger->name }}</td>
                        <td>{{ $ticket->departure_date }}</td>
                        <td>
                            <form action="{{ route("tickets.destroy", $ticket) }}" method="POST">
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
