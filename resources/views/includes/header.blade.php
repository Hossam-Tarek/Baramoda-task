<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Railway</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("tickets.index") }}">Tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("passengers.index") }}">Passengers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("stations.index") }}">Stations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("prices.index") }}">Prices</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
