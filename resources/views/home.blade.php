@extends("layouts.master")

@section("title", "Passenger")

@section("content")

<div class="row justify-content-center">
    <div class="card m-1" style="width: 16.5rem;" data-link="user/all_users.php">
        <div class="card-body">
            <h4 class="card-title text-muted">Tickets</h4>
            <h5 class="card-text ">{{ $tickets ?? ""}}</h5>
        </div>
    </div>

    <div class="card m-1" style="width: 16.5rem;" data-link="">
        <div class="card-body">
            <h4 class="card-title text-muted">Passengers</h4>
            <h5 class="card-text ">{{ $passengers ?? "" }}</h5>
        </div>
    </div>

    <div class="card m-1" style="width: 16.5rem;" data-link="category/allcategories.php">
        <div class="card-body">
            <h4 class="card-title text-muted">stations</h4>
            <h5 class="card-text ">{{ $stations ?? "" }}</h5>
        </div>
    </div>

    <div class="card m-1" style="width: 16.5rem;" data-link="product/all_products.php">
        <div class="card-body">
            <h4 class="card-title text-muted">Prices</h4>
            <h5 class="card-text ">{{ $prices ?? "" }}</h5>
        </div>
    </div>
</div>
@endsection
